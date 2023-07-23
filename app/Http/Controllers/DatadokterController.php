<?php

namespace App\Http\Controllers;

use App\Models\datadokter as ModelsDatadokter;
use App\Models\datapoli;
use App\Models\user;
use Illuminate\Http\Request;
use App\Http\Controllers\str;
class DatadokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtdokter = Modelsdatadokter::with('Datapoli','User')->paginate(5);
        
        return view('datadokter.masuk', compact('dtdokter'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
        $poli = datapoli::all();
        $edtdokter = Modelsdatadokter::all();
        
        return view('datadokter.tambah', compact('poli','user'));

        $user = user::all();   
        $user = new user;
        $user->role ='dokter';
        $user->name = $request->nama;
        $user->password = bcrypt('rahasia');
        $user->save();

        $edtdokter = new Modelsdatadokter($request->all());
    $edtdokter->user_id = $user->id;
    $edtdokter->save();
        return redirect('datadokter-masuk')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Modelsdatadokter::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'datapoli_id' => $request->datapoli_id,
            'telp' => $request->telp,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
          
            
        ]);
        
        return redirect('datadokter-masuk')->with('toast_success', 'Data Berhasil Tersimpan!');
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
        $poli = datapoli::all();
        $edtdokter = Modelsdatadokter::with('Datapoli')->findorfail($id);
        return view('datadokter.edit', compact('edtdokter','poli'));
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
        $edtdokter = Modelsdatadokter::findorfail($id);
        $edtdokter->update($request->all());
        return redirect('datadokter-masuk')->with('toast_success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edtdokter = Modelsdatadokter::findorfail($id);
        $edtdokter->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}