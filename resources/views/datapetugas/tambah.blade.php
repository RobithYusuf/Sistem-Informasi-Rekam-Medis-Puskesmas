@extends('index_tabel')
@section('judul','Pendaftaran')
@section('back_tabel','/datapetugas-masuk')
@section('before_judul_tabel','Tabel Pendaftaran')
@section('judul_tabel','Tambah Data Pendaftaran')
@section('content')


<div class="content">
    <div class="container-fluid">
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Petugas</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('simpanpetugas') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="id">ID Petugas:</label>
                            <input type="text" id="id" name="id" class="form-control" placeholder="ID Petugas" required value="{{ $newId }}" readonly disabled>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Petugas:</label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Petugas" required oninvalid="this.setCustomValidity('Nama Petugas Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <label for="telp">Nomor HP:</label>
                            <input type="text" id="telp" name="telp" class="form-control" placeholder="Nomor Telepon" required oninvalid="this.setCustomValidity('Nomor Telepon Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir:</label>
                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required oninvalid="this.setCustomValidity('Tanggal Lahir Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat" required oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong')" oninput="this.setCustomValidity('')"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto_profil">Foto Profil:</label>
                            <input type="file" class="form-control" id="foto_profil" name="foto_profil">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                            <button type="button" class="btn btn-secondary" onclick="history.back()">Kembali</button>
                        </div>

                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection
