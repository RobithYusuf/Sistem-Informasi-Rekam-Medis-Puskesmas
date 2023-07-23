<?php

namespace App\Http\Controllers;

use App\Models\datapasien as ModelsDatapasien;

use Illuminate\Http\Request;

class DatapasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpasien = Modelsdatapasien::paginate(5);
        return view('datapasien.masuk', compact('dtpasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datapasien.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Modelsdatapasien::create([
            'id' => $request->id,
            'nik_kk' => $request->nik_kk,
            'nama_kepala' => $request->nama_kepala,
            'nama_pasien' => $request->nama_pasien,
            'kode_kk' => $request->kode_kk,
            'nik' => $request->nik,
            'no_rm' => $request->no_rm,
            'no_kartu' => $request->no_kartu,
            'alamat' => $request->alamat,
            'hubungan' => $request->hubungan,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
        ]);
        return redirect('datapasien-masuk')->with('toast_success', 'Data Berhasil Tersimpan!');
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
        $edtpasien = Modelsdatapasien::findorfail($id);
        return view('datapasien.edit', compact('edtpasien'));
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
        $edtpasien = Modelsdatapasien::findorfail($id);
        $edtpasien->update($request->all());
        return redirect('datapasien-masuk')->with('toast_success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edtpasien = Modelsdatapasien::findorfail($id);
        $edtpasien->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
