@extends('index_tabel')

@section('judul','Pasien')
@section('before_judul_tabel','Tabel Pasien')
@section('judul_tabel','Edit Data Pasien')

@section('content')
<div class="content">
    <div class="container-fluid">
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Pasien</h3>
                </div>

                <div class="card-body">
                    <form action="{{ url('updatepasien',$edtpasien->id) }}" method="post">
                        {{ csrf_field() }}

                        <!-- I assumed the ID field is not editable, hence disabled -->
                        <div class="form-group">
                            <input type="text" id="id" name="id" class="form-control" placeholder="ID Petugas" value="{{ $edtpasien->id }}" disabled>
                        </div>

                        <div class="form-group">
                            <input type="text" id="kode_kk" name="kode_kk" class="form-control" placeholder="Kode KK" value="{{ $edtpasien->kode_kk }}">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama_kepala" name="nama_kepala" class="form-control" placeholder="Nama Kepala Keluarga" value="{{ $edtpasien->nama_kepala }}">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama_pasien" name="nama_pasien" class="form-control" placeholder="Nama Pasien" value="{{ $edtpasien->nama_pasien }}">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nik" name="nik" class="form-control" placeholder="NIK" value="{{ $edtpasien->nik }}">
                        </div>

                        <div class="form-group">
                            <input type="text" id="no_rm" name="no_rm" class="form-control" placeholder="Nomor Rekam Medis" value="{{ $edtpasien->no_rm }}">
                        </div>

                        <div class="form-group">
                            <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat">{{ $edtpasien->alamat }}</textarea>
                        </div>

                        <div class="form-group">
                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $edtpasien->tgl_lahir }}">
                        </div>

                        <div class="form-group">
                            <input type="text" id="no_kartu" name="no_kartu" class="form-control" placeholder="Nomor Kartu" value="{{ $edtpasien->no_kartu }}">
                        </div>

                        <div class="form-group">
                            <select class="form-select" id="agama" name="agama" aria-label="Default select example">
                                <option selected>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Kristen Katolik">Kristen Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-select" id="hubungan" name="hubungan" aria-label="Default select example">
                                <option selected>Pilih Hubungan Keluarga</option>
                                <option value="suami">Suami</option>
                                <option value="istri">Istri</option>
                                <option value="anak">Anak</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
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