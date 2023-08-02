@extends('index_tabel')

@section('judul','Pendaftaran')
@section('back_tabel','/datapetugas-masuk')
@section('before_judul_tabel','Tabel Pendaftaran')
@section('judul_tabel','Edit Data Pendaftaran')

@section('content')

<div class="content">
    <div class="container-fluid">
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Petugas</h3>
                </div>

                <div class="card-body">
                    <form action="{{ url('updatepetugas',$edtpetugas->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="id">ID Petugas:</label>
                            <input type="text" id="id" name="id" class="form-control" placeholder="ID Petugas" value="{{ $edtpetugas->id }}" disabled>
                        </div>


                        <div class="form-group">
                            <label for="nama">Nama Petugas:</label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Petugas" value="{{ $edtpetugas->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="telp">Nomor HP:</label>
                            <input type="text" id="telp" name="telp" class="form-control" placeholder="Nomor Telepon" value="{{ $edtpetugas->telp }}">
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir:</label>
                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $edtpetugas->tgl_lahir }}">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat">{{ $edtpetugas->alamat }}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                            <button type="button" class="btn btn-secondary" onclick="history.back()">Kembali</button>
                        </div>

                    </form>
                </div>


            </div>
        </section>
    </div>
</div>
@endsection
