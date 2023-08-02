@extends('index_tabel')
@section('judul','Pasien')
@section('back_tabel','/datapasien-masuk')
@section('before_judul_tabel','Tabel Pasien')
@section('judul_tabel','Tamabah Data Pasien')

@section('content')
<style>
    .custom-input-group {
        margin-left: -10px;
    }
</style>

<div class="content">
    <div class="container-fluid">
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">TAMBAH DATA PASIEN</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('simpanpasien') }}" method="post">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name1">NIK KK:</label>
                                    <input type="text" id="nik_kk" name="nik_kk" class="form-control" placeholder="NIK KK" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name2">Nama Kepala Keluarga:</label>
                                    <input type="text" id="nama_kepala" name="nama_kepala" class="form-control" placeholder="Nama Kepala Keluarga" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DETAIL DATA PASIEN</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group custom-input-group">
                            <label for="name2">Nomor Rekam Medis (RM):</label>
                            <input type="text" id="no_rm" name="no_rm" class="form-control" required value="{{ $next_rm_number }}" disabled>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name2">Kode KK:</label>
                                <input type="text" id="kode_kk" name="kode_kk" class="form-control" placeholder="Masukkan Kode KK" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name2">Nik Pasien:</label>
                                <input type="text" id="nik" name="nik" class="form-control" placeholder="Masukkan NIK" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name3">Nama Pasien :</label>
                                <input type="text" id="nama_pasien" name="nama_pasien" class="form-control" placeholder="Masukkan Nama Pasien" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                    </div>

                    <div class="row">



                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name4">Alamat :</label>
                                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name5">Tanggal Lahir:</label>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required oninvalid="this.setCustomValidity('Tanggal Lahir Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name6">No Kartu:</label>
                                <input type="text" id="no_kartu" name="no_kartu" class="form-control" placeholder="Masukkan Nomor Kartu" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <div class="row">


                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name7">Agama :</label>
                                <select class="form-select" name="agama" aria-label="Default select example">
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name8">Hubungan Keluarga :</label>
                                <select class="form-select" name="hubungan" aria-label="Default select example">
                                    <option value="">Pilih Hubungan Keluarga</option>
                                    <option value="suami">Suami</option>
                                    <option value="istri">Istri</option>
                                    <option value="anak">Anak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name9">Jenis Kelamin :</label>
                                <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
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
