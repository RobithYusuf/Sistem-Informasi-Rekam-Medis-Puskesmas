<?php

namespace App\Http\Controllers;

use App\datapetugas;
use App\Models\datapetugas as ModelsDatapetugas;
use Illuminate\Http\Request;

class DatapetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpetugas = Modelsdatapetugas::paginate(5);
        return view('datapetugas.masuk', compact('dtpetugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datapetugas.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|unique:datapetugas',
            'nama' => 'required',
            'telp' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        ModelsDatapetugas::create($validated);

        return redirect('datapetugas-masuk')->with('toast_success', 'Data Berhasil Tersimpan!');
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
        $edtpetugas = Modelsdatapetugas::findorfail($id);
        return view('datapetugas.edit', compact('edtpetugas'));
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
        $edtpetugas = Modelsdatapetugas::findorfail($id);
        $edtpetugas->update($request->all());
        return redirect('datapetugas-masuk')->with('toast_success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edtpetugas = Modelsdatapetugas::findorfail($id);
        $edtpetugas->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
