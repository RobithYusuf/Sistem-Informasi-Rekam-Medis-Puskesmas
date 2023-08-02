<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\datapetugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\datapetugas as ModelsDatapetugas;

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
        return view('datapetugas.tabel_petugas', compact('dtpetugas'));
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


    public function store(Request $request)
    {
        $user = new User;
        $user->role = 'petugas';

        // Membuat username dari nama petugas dan tanggal lahir
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
        $user->password = Hash::make($password);

        // Menangani upload foto profil
        if ($request->hasFile('foto_profil')) {
            $foto_profil = $request->file('foto_profil');
            $foto_profil_name = time() . '.' . $foto_profil->getClientOriginalExtension();
            $foto_profil->move(storage_path('app/public/FotoPetugas'), $foto_profil_name);
            $user->foto_profil = $foto_profil_name;
        } else {
            $user->foto_profil = 'default_foto_profil.jpeg'; // default foto profil jika user belum memiliki foto
        }

        $user->save();

        $petugas = new datapetugas;
        $petugas->id = $request->id;
        $petugas->nama = $request->nama;
        $petugas->telp = $request->telp;
        $petugas->tgl_lahir = $request->tgl_lahir;
        $petugas->alamat = $request->alamat;
        $petugas->user_id = $user->id;
        $petugas->save();
        return redirect('datapetugas-masuk')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => ['nullable', 'string', 'max:255', 'unique:users,username,' . $user->id],
            'new_password' => ['string', 'min:8', 'nullable'],
            'foto_profil' => ['image', 'mimes:jpeg,png,jpg,gif,svg'], // Validasi file harus berupa gambar dan maksimal 2MB
        ]);

        // Jika pengguna memasukkan username baru, update username
        if ($request->filled('username')) {
            $user->username = $request->username;
        }

        // Jika pengguna memasukkan password baru, update password
        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);
        }

        // Menangani upload foto profil
        if ($request->hasFile('foto_profil')) {
            $foto_profil = $request->file('foto_profil');
            $foto_profil_name = time() . '.' . $foto_profil->getClientOriginalExtension();
            $foto_profil->move(storage_path('app/public/FotoPetugas'), $foto_profil_name);

            // Menghapus foto profil lama jika bukan foto default dan ada foto untuk dihapus
            if ($user->foto_profil != 'default_foto_profil.jpeg' && $user->foto_profil && file_exists(storage_path('app/public/FotoPetugas/' . $user->foto_profil))) {
                unlink(storage_path('app/public/FotoPetugas/' . $user->foto_profil));
            }

            $user->foto_profil = $foto_profil_name;
        }

        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui.');
    }


    public function showForm()
    {
        $usedIds = datapetugas::pluck('id')->all();
        $newId = 1;

        while (in_array($newId, $usedIds)) {
            $newId++;
        }
        return view('datapetugas.tambah', ['newId' => $newId]);
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

        // Mengambil data user
        $user = User::find($edtpetugas->user_id);
        // Update nama pada tabel users
        $user->name = $request->nama;

        // Menghandle perubahan foto profil
        if ($request->hasFile('foto_profil')) {
            $foto_profil = $request->file('foto_profil');
            $foto_profil_name = time() . '.' . $foto_profil->getClientOriginalExtension();
            $foto_profil->move(storage_path('app/public/FotoPetugas'), $foto_profil_name);

            // Menghapus foto profil lama jika bukan foto default
            if ($user->foto_profil != 'default_foto_profil.jpeg' && file_exists(public_path('images/FotoPetugas/' . $user->foto_profil))) {
                unlink(public_path('images/FotoPetugas/' . $user->foto_profil));
            }

            $user->foto_profil = $foto_profil_name;
        }

        $user->save();

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
