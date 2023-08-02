@extends('index_tabel')
@section('judul','Pendaftaran')
@section('back_tabel','/datapendaftaran-masuk')
@section('before_judul_tabel','Tabel Pendaftaran')
@section('judul_tabel','Edit Data Pendaftaran')

@section('content')
<div class="content">
    <div class="container-fluid">
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Pendaftaran</h3>
                </div>



                <div class="card-body">
                    <form action="{{ url('updatependaftaran',$edtpendaftaran->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="text" id="id" name="id" class="form-control" placeholder="ID Petugas" value="{{ $edtpendaftaran->id }}" disabled>
                        </div>

                        <div class="form-group">
                            <input type="text" id="pasien_id" name="pasien_id" class="form-control" placeholder="Pasien ID" value="{{ $edtpendaftaran->pasien_id }}" hidden>
                        </div>

                        <div class="form-group">
                            <input type="text" id="pelayanan" name="pelayanan" class="form-control" placeholder="Pelayanan" value="{{ $edtpendaftaran->pelayanan }}">
                        </div>


                        <div class="form-group">
                            <select class="form-control select2" style="width: 100%;" name="datapoli_id" id="datapoli_id">
                                <option disabled value>Pilih Poliklinik</option>
                                <option value="{{ $edtpendaftaran->datapoli_id }}">{{ $edtpendaftaran->poliklinik->nama_poli }}</option>
                                @foreach ($dtpoli as $item)
                                <option value="{{  $item->id }}">{{ $item->nama_poli }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" id="riwayat_alergi" name="riwayat_alergi" class="form-control" placeholder="Riwayat Alergi" value="{{ $edtpendaftaran->riwayat_alergi }}">
                        </div>

                        <div class="form-group">
                            <input type="text" id="no_registrasi" name="no_registrasi" class="form-control" placeholder="Nomor Registrasi" value="{{ $edtpendaftaran->no_registrasi }}">
                        </div>

                        <div class="form-group">
                            <label>Pilih Status:</label>
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option value="">Pilih Status</option>
                                <option value="bpjs" @if($edtpendaftaran->status == 'bpjs') selected @endif>BPJS</option>
                                <option value="umum" @if($edtpendaftaran->status == 'umum') selected @endif>UMUM</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <input type="text" id="no_bpjs" name="no_bpjs" class="form-control" placeholder="Nomor BPJS" value="{{ $edtpendaftaran->no_bpjs}}">
                        </div>

                        <div class="form-group">
                            <label>Status Pendaftaran:</label><br>
                            <input type="radio" id="menunggu" name="status_pendaftaran" value="menunggu" @if($edtpendaftaran->status_pendaftaran == 'menunggu') checked @endif>
                            <label for="menunggu">Menunggu</label>
                            <span class="small text-muted"> (Pendaftaran sedang diproses dan menunggu konfirmasi)</span>
                            <br>
                            <input type="radio" id="berhasil" name="status_pendaftaran" value="berhasil" @if($edtpendaftaran->status_pendaftaran == 'berhasil') checked @endif>
                            <label for="berhasil">Berhasil</label>
                            <span class="small text-muted"> (Pendaftaran telah berhasil dan pasien dapat melanjutkan ke proses pemeriksaan)</span>
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