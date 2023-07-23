<?php

namespace App\Http\Controllers;
use App\Models\pemeriksaan as ModelsPemeriksaan;
use App\Models\datapendaftaran as ModelsDatapendaftaran;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpemeriksaan = Modelspemeriksaan::with('Pendaftaran')->paginate(5);
        return view('pemeriksaan.masuk', compact('dtpemeriksaan'));
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