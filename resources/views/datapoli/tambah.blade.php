@extends('index_tabel')
@section('judul','Poliklinik')
@section('before_judul_tabel','Tabel Poliklinik')
@section('judul_tabel','Tambah Data Poliklinik')

@section('content')

<div class="content">
    <div class="container-fluid">
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Poliklinik</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('simpanpoli') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="id">ID Poliklinik:</label>
                            <input type="text" id="id" name="id" class="form-control" placeholder="ID Poliklinik" required value="{{ $newId }}" readonly disabled>

                        </div>

                        <div class="form-group">
                            <label for="nama_poli">Nama Poliklinik:</label>
                            <input type="text" id="nama_poli" name="nama_poli" class="form-control" placeholder="Nama Poliklinik" required oninvalid="this.setCustomValidity('Nama Poliklinik Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <label for="ruangan">Ruangan Poliklinik:</label>
                            <input type="text" id="ruangan" name="ruangan" class="form-control" placeholder="Ruangan" required oninvalid="this.setCustomValidity('Ruangan Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>

                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection