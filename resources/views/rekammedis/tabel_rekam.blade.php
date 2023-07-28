@extends('index_tabel')
@section('judul','Rekam Medis')
@section('before_judul_tabel','Data Rekam Medis')
@section('judul_tabel','Tabel Rekam Medis')

@section('content')

<div class="content">
    <div class="container-fluid">
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <link rel="stylesheet" href="css/stylejudul.css">
                    <h3 class="card-title">Data Rekam Medis</h3>
                </div>
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3 float-right" data-toggle="modal" data-target="#searchModal">
                        <i class="fas fa-print"></i> Print Rekam Medis Pasien
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="searchModalLabel">
                                        <i class="fas fa-search"></i> Cari & Print PDF Rekam Medis (RM)
                                    </h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="searchForm" action="{{ route('search_and_print') }}" method="get">
                                        <div class="form-group row">
                                            <label for="search" class="col-sm-2 col-form-label">Nomor RM</label>
                                            <div class="col-sm-10 input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">RM-</span>
                                                </div>
                                                <input type="text" id="search" name="search" class="form-control form-control-lg" placeholder="Masukkan Nomor...">
                                            </div>
                                            <div class="col-sm-10 offset-sm-2">
                                                <small class="form-text text-muted">Masukan nomor RM- saja. contoh '<strong>01</strong>', '<strong>002</strong>', '<strong>003</strong>' dan seterusnya!</small>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="button" class="btn btn-primary" onclick="submitSearch()">Print</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered table-striped" id="example1">
                        <thead>
                            <tr>
                                <th>No RM</th>
                                <th>Nama Pasien</th>
                                <th>Poliklinik</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>No BPJS</th>
                                <th>Diagnosis</th>
                                <th>Riwayat Alergi</th>
                                <th>Hasil Pemeriksaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataRekammedis as $item)
                            <tr>
                                <td>{{ $item->no_rm }}</td>
                                <td>{{ $item->nama_pasien }}</td>
                                <td>{{ $item->poliklinik }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->no_bpjs }}</td>
                                <td>{{ $item->diagnosis }}</td>
                                <td>{{ $item->riwayat_alergi }}</td>
                                <td>{{ $item->hasil_pemeriksaan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    {{-- Pagination links not available since we are using raw DB::select --}}
                </div>
            </div>
        </section>
    </div>
</div>
@endsection