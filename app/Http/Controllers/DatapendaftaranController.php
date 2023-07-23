<?php

namespace App\Http\Controllers;

use App\datapendaftaran;
use App\Models\datapendaftaran as ModelsDatapendaftaran;
use App\Models\datapasien;
use App\Models\datapoli;
use App\Models\pemeriksaan;
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
        $dtpendaftaran = Modelsdatapendaftaran::with('pasien', 'poliklinik')->paginate(5);
        return view('datapendaftaran.masuk', compact('dtpendaftaran'));
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
            'id' => $request->id,
            'pelayanan' => $request->pelayanan,
            'pasien_id' => $request->pasien_id,
            'datapoli_id' => $request->datapoli_id,
            'riwayat_alergi' => $request->riwayat_alergi,
            'no_registrasi' => $request->no_registrasi,
            'status' => $request->status,
            'status_pendaftaran' => $request->status_pendaftaran,
            'no_bpjs' => $request->no_bpjs,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Jika status pendaftaran adalah "berhasil", buat baris baru di tabel pemeriksaan
        if ($request->status_pendaftaran == 'berhasil') {
            $pemeriksaan = pemeriksaan::create([
                'pendaftaran_id' => $pendaftaran->id,
                'riwayat_alergi' => $pendaftaran->riwayat_alergi,
                'status' => 'belum diperiksa',
                'tgl_pemeriksaan' => now()
            ]);
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
        $edtpendaftaran = Modelsdatapendaftaran::findorfail($id);
        return view('datapendaftaran.edit', compact('edtpendaftaran', 'dtpoli'));
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
        $edtpendaftaran->update($request->all());
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
        $edtpendaftaran = Modelsdatapendaftaran::findorfail($id);
        $edtpendaftaran->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
