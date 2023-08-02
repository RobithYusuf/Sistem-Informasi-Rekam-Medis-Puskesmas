<?php

namespace App\Http\Controllers;

use App\Models\datadokter;
use App\Models\pemeriksaan;
use Illuminate\Http\Request;
use App\Models\pemeriksaan as ModelsPemeriksaan;
use App\Models\datapendaftaran as ModelsDatapendaftaran;

class PemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mendapatkan id user yang sedang login
        $userId = auth()->user()->id;

        // Mencari dokter dengan user_id yang sama
        $dokter = Datadokter::where('user_id', $userId)->first();

        // Jika dokter tidak ditemukan atau user yang login bukan dokter,
        // kita bisa mengarahkan mereka ke halaman lain atau menampilkan pesan error
        if (!$dokter) {
            return redirect('home')->with('error', 'Silahkan masuk sebagai Dokter, bukan admin dokter.');
        }

        // Mendapatkan id poliklinik dari dokter yang sedang login
        $poliklinikId = $dokter->datapoli_id;

        // Menampilkan pemeriksaan berdasarkan poliklinik dokter
        $dtpemeriksaan = Modelspemeriksaan::whereHas('Pendaftaran', function ($query) use ($poliklinikId) {
            $query->where('datapoli_id', $poliklinikId);
        })->paginate(5);

        return view('pemeriksaan.tabel_pemeriksaan', compact('dtpemeriksaan'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemeriksaan = Modelspemeriksaan::find($id);

        // Jika data pemeriksaan tidak ditemukan, Anda dapat menangani kasus ini
        if (!$pemeriksaan) {
            abort(404, 'Data pemeriksaan tidak ditemukan');
        }

        $riwayat_alergi = ModelsDatapendaftaran::find($pemeriksaan->pendaftaran_id)->riwayat_alergi;

        // Mengirimkan data pemeriksaan dan riwayat alergi ke tampilan untuk ditampilkan
        return view('riwayat_alergi', compact('pemeriksaan', 'riwayat_alergi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edtpemeriksaan = Modelspemeriksaan::findorfail($id);
        return view('pemeriksaan.edit', compact('edtpemeriksaan'));
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
        $edtpemeriksaan = Modelspemeriksaan::findorfail($id);
        $edtpemeriksaan->update($request->all());
        return redirect('datapemeriksaan-masuk')->with('toast_success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
