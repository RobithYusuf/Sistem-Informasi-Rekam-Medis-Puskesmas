@extends('index_tabel')
@section('judul','Pemeriksaan')
@section('back_tabel','/datapemeriksaan-masuk')
@section('before_judul_tabel','Tabel Pemeriksaan')
@section('judul_tabel','Tamabah Data Pemeriksaan')

@section('content')
<div class="content">
    <div class="container-fluid">
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Pemeriksaan</h3>
                </div>

                <div class="card-body">
                    <form action="{{ url('updatepemeriksaan',$edtpemeriksaan->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama_pasien">Nama Pasien :</label>
                            <input type="text" id="nama_pasien" name="nama_pasien" class="form-control" placeholder="Hasil Pemeriksaan" value="{{ $edtpemeriksaan->Pendaftaran->pasien->nama_pasien }}">
                        </div>
                        <div class="form-group">
                            <label for="hasil_pemeriksaan">Hasil Pemeriksaan :</label>
                            <input type="text" id="hasil_pemeriksaan" name="hasil_pemeriksaan" class="form-control" placeholder="Hasil Pemeriksaan" value="{{ $edtpemeriksaan->hasil_pemeriksaan }}">
                        </div>

                        <div class="form-group">
                            <label for="diagnosis">Diagnosis :</label>
                            <input type="text" id="diagnosis" name="diagnosis" class="form-control" placeholder="Diagnosis" value="{{ $edtpemeriksaan->diagnosis }}">
                        </div>

                        <div class="form-group">
                            <label for="status">Status :</label>
                            <select class="form-select" id="status" name="status" aria-label="Default select example" required oninvalid="this.setCustomValidity('Status Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                                <option value="">Pilih Status</option>
                                <option value="belum diperiksa">Belum Diperiksa</option>
                                <option value="sudah diperiksa">Sudah Diperiksa</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tgl_pemeriksaan">Tanggal Pemeriksaan :</label>
                            <input type="date" id="tgl_pemeriksaan" name="tgl_pemeriksaan" class="form-control" placeholder="Tanggal Pemeriksaan" value="{{ $edtpemeriksaan->tgl_pemeriksaan ?? date('Y-m-d') }}">
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
