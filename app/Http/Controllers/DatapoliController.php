<?php

namespace App\Http\Controllers;

use App\Models\datapoli as ModelsDatapoli;
use Illuminate\Http\Request;

class DatapoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpoli = Modelsdatapoli::paginate(5);
        return view('datapoli.masuk', compact('dtpoli'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datapoli.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Modelsdatapoli::create([
            'id' => $request->id,
            'nama_poli' => $request->nama_poli,
            'ruangan' => $request->ruangan,
        ]);
        return redirect('datapoli-masuk')->with('toast_success', 'Data Berhasil Tersimpan!');
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
        $edtpoli = Modelsdatapoli::findorfail($id);
        return view('datapoli.edit', compact('edtpoli'));
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
        $edtpoli = Modelsdatapoli::findorfail($id);
        $edtpoli->update($request->all());
        return redirect('datapoli-masuk')->with('toast_success', 'Data Berhasil Diupdate!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edtpoli = Modelsdatapoli::findorfail($id);
        $edtpoli->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}