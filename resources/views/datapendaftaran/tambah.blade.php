@extends('index_tabel')
@section('judul','Pendaftaran')
@section('before_judul_tabel','Tabel Pendaftaran')
@section('judul_tabel','Tambah Data Pendaftaran')

@section('content')


<div class="content">
    <div class="container-fluid">
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">TAMBAH DATA PENDAFTARAN</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('simpanpendaftaran') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <select class="form-control select2" style="width: 100%;" name="pasien_id" id="pasien_id">
                                @foreach ($dtpasien as $item)
                                <option value="{{  $item->id }}">{{ $item->no_rm }} [{{ $item->nama_pasien }}]</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" id="id" name="id" class="form-control" placeholder="ID Pendaftaran" required oninvalid="this.setCustomValidity('ID Pengguna Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <input type="text" id="pelayanan" name="pelayanan" class="form-control" placeholder="Pelayanan" required oninvalid="this.setCustomValidity('Nama Dokter Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <select class="form-control select2" style="width: 100%;" name="datapoli_id" id="datapoli_id">
                                <option disabled value>Pilih Poliklinik</option>
                                @foreach ($dtpoli as $item)
                                <option value="{{  $item->id }}">{{ $item->nama_poli }} [Ruang: {{ $item->ruangan  }}]</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" id="riwayat_alergi" name="riwayat_alergi" class="form-control" placeholder="Riwayat Alergi" required oninvalid="this.setCustomValidity('Nomor Telepon Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <input type="text" id="no_registrasi" name="no_registrasi" class="form-control" placeholder="Nomor Registrasi" required oninvalid="this.setCustomValidity('Tanggal Lahir Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option value="">Pilih Status Pasien</option>
                                <option value="bpjs">BPJS</option>
                                <option value="umum">UMUM</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea name="no_bpjs" id="no_bpjs" class="form-control" placeholder="Nomor BPJS" required oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">Non BPJS</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status Pendaftaran:</label><br>
                            <input type="radio" id="menunggu" name="status_pendaftaran" value="menunggu" checked>
                            <label for="menunggu">Menunggu</label>
                            <span class="small text-muted"> (Pendaftaran sedang diproses dan menunggu konfirmasi)</span>
                            <br>
                            <input type="radio" id="berhasil" name="status_pendaftaran" value="berhasil">
                            <label for="berhasil">Berhasil</label>
                            <span class="small text-muted"> (Pendaftaran telah berhasil dan pasien dapat melanjutkan ke proses pemeriksaan)</span>
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