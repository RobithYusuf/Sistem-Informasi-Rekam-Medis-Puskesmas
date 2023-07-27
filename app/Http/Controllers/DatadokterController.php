<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\datapoli;
use Illuminate\Http\Request;
use App\Http\Controllers\str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\datadokter as ModelsDatadokter;

class DatadokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtdokter = Modelsdatadokter::with('Datapoli', 'User')->paginate(5);

        return view('datadokter.masuk', compact('dtdokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poli = datapoli::all();
        $usedIds = datapoli::pluck('id')->all();
        $newId = 1;

        while (in_array($newId, $usedIds)) {
            $newId++;
        }

        return view('datadokter.tambah', compact('poli'), ['newId' => $newId]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new user;
        $user->role = 'dokter';

        // Membuat username dari nama dokter dan tanggal lahir
        $name_parts = explode(" ", $request->nama);
        $username = strtolower($name_parts[0]); // mengambil kata pertama dan merubah menjadi huruf kecil

        // Menambahkan tanggal lahir ke username
        // Format tanggal lahir menjadi string dan gunakan dalam username
        $dateOfBirth = $request->tgl_lahir;
        $formattedDate = date("dmY", strtotime($dateOfBirth)); // format menjadi "ddmmyyyy"

        $user->username = $username . $formattedDate;

        $user->name = $request->nama;

        // Menggunakan tanggal lahir sebagai password
        // Format tanggal lahir menjadi string dan gunakan sebagai password
        $password = date("mYd", strtotime($dateOfBirth)); // format menjadi "mmyyyydd"
        $user->password = bcrypt($password);

        // Menangani upload foto profil
        if ($request->hasFile('foto_profil')) {
            $foto_profil = $request->file('foto_profil');
            $foto_profil_name = time() . '.' . $foto_profil->getClientOriginalExtension();
            $foto_profil->move(storage_path('app/public/FotoDokter'), $foto_profil_name);
            $user->foto_profil = $foto_profil_name;
        } else {
            $user->foto_profil = 'default_foto_profil.jpeg'; // default foto profil jika user belum memiliki foto
        }


        $user->save();

        $edtdokter = new Modelsdatadokter($request->all());
        $edtdokter->user_id = $user->id;
        $edtdokter->save();
        return redirect('datadokter-masuk')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $user->id],
            'password' => ['required', 'string', 'min:8'],
            'foto_profil' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'], // Validasi file harus berupa gambar dan maksimal 2MB
        ]);

        $user->username = $request->username;
        $user->password = Hash::make($request->password);

        // Menangani upload foto profil
        if ($request->hasFile('foto_profil')) {
            $foto_profil = $request->file('foto_profil');
            $foto_profil_name = time() . '.' . $foto_profil->getClientOriginalExtension();
            $foto_profil->move(storage_path('app/public/FotoDokter'), $foto_profil_name);

            // Menghapus foto profil lama jika bukan foto default
            if ($user->foto_profil != 'default_foto_profil.jpeg' && file_exists(storage_path('app/public/FotoDokter/' . $user->foto_profil))) {
                unlink(storage_path('app/public/FotoDokter/' . $user->foto_profil));
            }

            $user->foto_profil = $foto_profil_name;
        }

        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui.');
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
        return view('datadokter.edit', compact('edtdokter', 'poli'));
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

        // Mengambil data user
        $user = user::find($edtdokter->user_id);

        // Menghandle perubahan foto profil
        if ($request->hasFile('foto_profil')) {
            $foto_profil = $request->file('foto_profil');
            $foto_profil_name = time() . '.' . $foto_profil->getClientOriginalExtension();
            $foto_profil->move(storage_path('app/public/FotoDokter'), $foto_profil_name);

            // Menghapus foto profil lama jika bukan foto default
            if ($user->foto_profil != 'default_foto_profil.jpeg' && file_exists(public_path('images/FotoDokter/' . $user->foto_profil))) {
                unlink(public_path('images/FotoDokter/' . $user->foto_profil));
            }


            $user->foto_profil = $foto_profil_name;
        }

        $user->save();

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
