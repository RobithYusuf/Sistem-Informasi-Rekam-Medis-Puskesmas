<?php

namespace App\Http\Controllers;

use App\datapendaftaran;
use App\Models\datapendaftaran as ModelsDatapendaftaran;
use App\Models\datapasien;
use App\Models\datapoli;
use App\Models\pemeriksaan;
use App\Models\rekammedis;
use Illuminate\Http\Request;

class DatapendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpendaftaran = Modelsdatapendaftaran::with('pasien', 'poliklinik')->get();
        return view('datapendaftaran.tabel_pendaftaran', compact('dtpendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtpasien = datapasien::all();
        $dtpoli = datapoli::all();
        return view('datapendaftaran.tambah', compact('dtpasien', 'dtpoli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Simpan data pendaftaran
        $pendaftaran = Modelsdatapendaftaran::create([
            'pelayanan' => $request->pelayanan,
            'pasien_id' => $request->pasien_id,
            'datapoli_id' => $request->datapoli_id,
            'riwayat_alergi' => $request->riwayat_alergi,
            'status' => $request->status,
            'no_bpjs' => $request->no_bpjs,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Hitung berapa banyak pemeriksaan yang belum diperiksa untuk poli yang sama
        $jumlah_belum_diperiksa = pemeriksaan::join('datapendaftaran', 'pemeriksaan.pendaftaran_id', '=', 'datapendaftaran.id')
            ->where('pemeriksaan.status', 'belum diperiksa')
            ->where('datapendaftaran.datapoli_id', $request->datapoli_id)
            ->count();

        // Jika jumlah pemeriksaan yang belum diperiksa untuk poli yang sama kurang dari 3, buat baris baru di tabel pemeriksaan
        if ($jumlah_belum_diperiksa < 3) {
            $pemeriksaan = pemeriksaan::create([
                'pendaftaran_id' => $pendaftaran->id,
                'riwayat_alergi' => $pendaftaran->riwayat_alergi,
                'status' => 'belum diperiksa',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // create a new record in rekam_medis
            $rekamMedis = rekammedis::create([
                'pemeriksaan_id' => $pemeriksaan->id,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // Set status pendaftaran menjadi "berhasil"
            $pendaftaran->update(['status_pendaftaran' => 'berhasil']);
        } else {
            // Jika jumlah pemeriksaan yang belum diperiksa untuk poli yang sama >= 3, set status pendaftaran menjadi "menunggu"
            $pendaftaran->update(['status_pendaftaran' => 'menunggu']);
        }

        return redirect('datapendaftaran-masuk')->with('toast_success', 'Data Berhasil Tersimpan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtpoli = datapoli::all();
        $pasien = datapasien::all(); // ganti 'Pasien' dengan nama model pasien Anda
        $edtpendaftaran = Modelsdatapendaftaran::findorfail($id);
        return view('datapendaftaran.edit', compact('edtpendaftaran', 'dtpoli', 'pasien'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edtpendaftaran = Modelsdatapendaftaran::findorfail($id);

        // Simpan status pendaftaran sebelumnya
        $status_pendaftaran_sebelumnya = $edtpendaftaran->status_pendaftaran;

        // Lakukan update
        $edtpendaftaran->update([
            'pelayanan' => $request->pelayanan,
            'pasien_id' => $request->pasien_id,
            'datapoli_id' => $request->datapoli_id,
            'riwayat_alergi' => $request->riwayat_alergi,
            'status' => $request->status,
            'status_pendaftaran' => $request->status_pendaftaran,
            'no_bpjs' => $request->no_bpjs,
        ]);
        $edtpendaftaran->updated_at = now();
        $edtpendaftaran->save();

        // Jika status pendaftaran berubah dari 'menunggu' menjadi 'berhasil'
        if ($status_pendaftaran_sebelumnya == 'menunggu' && $request->status_pendaftaran == 'berhasil') {
            $pemeriksaan = pemeriksaan::create([

                'pendaftaran_id' => $edtpendaftaran->id,
                'riwayat_alergi' => $edtpendaftaran->riwayat_alergi,
                'status' => 'belum diperiksa',
                'tgl_pemeriksaan' => now()
            ]);

            $rekamMedis = rekammedis::create([
                'pemeriksaan_id' => $pemeriksaan->id,
            ]);
        }
        if ($status_pendaftaran_sebelumnya == 'berhasil' && $request->status_pendaftaran == 'menunggu') {
            // Get the related pemeriksaan record
            $pemeriksaan = pemeriksaan::where('pendaftaran_id', $edtpendaftaran->id)->first();

            if ($pemeriksaan) {
                // Delete related rekam_medis
                rekammedis::where('pemeriksaan_id', $pemeriksaan->id)->delete();

                // Delete pemeriksaan
                $pemeriksaan->delete();
            }
        }
        return redirect('datapendaftaran-masuk')->with('toast_success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftaran = ModelsDatapendaftaran::findOrFail($id);

        if ($pendaftaran->status == "berhasil") {
            // Hapus semua pemeriksaan dan rekam medis yang berhubungan dengan pendaftaran ini
            foreach ($pendaftaran->pemeriksaan as $pemeriksaan) {
                // Hapus rekam medis yang berhubungan dengan pemeriksaan ini
                foreach ($pemeriksaan->rekam_medis as $rekam_medis) {
                    $rekam_medis->delete();
                }

                $pemeriksaan->delete();
            }
        }

        $pendaftaran->delete();

        return redirect('datapendaftaran-masuk')->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
