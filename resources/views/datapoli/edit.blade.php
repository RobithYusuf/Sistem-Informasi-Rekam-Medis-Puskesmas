@extends('index_tabel')

@section('judul','Poliklinik')
@section('back_tabel','/datapoli-masuk')
@section('before_judul_tabel','Tabel Poliklinik')
@section('judul_tabel','Edit Data Poliklinik')

@section('content')


<div class="content">
    <div class="container-fluid">
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Poliklinik</h3>
                </div>

                <div class="card-body">
                    <form action="{{ url('updatepoli',$edtpoli->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="id">ID Poliklinik:</label>
                            <input type="text" id="id" name="id" class="form-control" placeholder="ID Poliklinik" value="{{ $edtpoli->id }}" disabled>
                        </div>


                        <div class="form-group">
                            <label for="nama_poli">Nama Poliklinik:</label>
                            <input type="text" id="nama_poli" name="nama_poli" class="form-control" placeholder="Nama Poliklinik" value="{{ $edtpoli->nama_poli }}">
                        </div>

                        <div class="form-group">
                            <label for="ruangan">Ruangan Poliklinik:</label>
                            <input type="text" id="ruangan" name="ruangan" class="form-control" placeholder="Ruangan" value="{{ $edtpoli->ruangan }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>

                    </form>
                </div>


            </div>
        </section>
    </div>
</div>
@endsection
