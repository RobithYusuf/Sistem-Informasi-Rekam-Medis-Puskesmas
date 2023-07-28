@extends('index_tabel')
@section('judul','Dokter')
@section('before_judul_tabel','Tabel Dokter')
@section('judul_tabel','Tambah Data Dokter')

@section('content')
<div class="content">
    <div class="container-fluid">
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Dokter</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('simpandokter') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">

                            <label for="id">ID Dokter:</label>
                            <input type="text" id="id" name="id" class="form-control" placeholder="ID Dokter" required value="{{ $newId }}" readonly>

                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label for="gelar_awal">Gelar Awal:</label>
                                <input type="text" id="gelar_awal" name="gelar_awal" class="form-control" placeholder="Gelar Awal" required oninvalid="this.setCustomValidity('Gelar Awal Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="col-sm-7">
                                <label for="nama">Nama Dokter:</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Dokter" required oninvalid="this.setCustomValidity('Nama Dokter Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="col-sm-3">
                                <label for="gelar_akhir">Gelar Akhir:</label>
                                <input type="text" id="gelar_akhir" name="gelar_akhir" class="form-control" placeholder="Gelar Akhir" required oninvalid="this.setCustomValidity('Gelar Akhir Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="datapoli_id">Pilih Poliklinik:</label>
                            <select class="form-control select2" style="width: 100%;" name="datapoli_id" id="datapoli_id">
                                <option disabled value>Pilih Poliklinik</option>
                                @foreach ($poli as $item)
                                <option value="{{  $item->id }}">{{ $item->nama_poli }}</option>
                                @endforeach
                            </select>
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
                        </div>

                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection