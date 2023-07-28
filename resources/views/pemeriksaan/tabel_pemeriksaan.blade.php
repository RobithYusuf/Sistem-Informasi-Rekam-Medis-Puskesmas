@extends('index_tabel')
@section('judul','Pemeriksaan')
@section('before_judul_tabel','Data Pemeriksaan')
@section('judul_tabel','Tabel Pemeriksaan')

@section('content')
<div class="content">
    <div class="container-fluid">
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <link rel="stylesheet" href="css/stylejudul.css">
                    <h3 class="card-title">Data PEMERIKSAAN</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow-x: auto;">
                        <table class="table table-bordered responsive-table">
                            <link rel="stylesheet" href="css/style.css">
                            <thead>
                                <tr>
                                    <th style="width: 100px">ID Pemeriksaan</th>
                                    <th style="width: 100px">Nama Pasien</th>
                                    <th style="width: 100px">Riwayat Alergi</th>
                                    <th style="width: 80px">Poliklinik</th>
                                    <th style="width: 80px">Hasil Pemeriksaan</th>
                                    <th style="width: 80px">Diagnosis</th>
                                    <th style="width: 80px">Status</th>
                                    <th style="width: 80px">Tanggal Pemeriksaan</th>
                                    <th style="width: 80px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($dtpemeriksaan->count() > 0)
                                @foreach ($dtpemeriksaan as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->Pendaftaran->pasien->nama_pasien }}</td>
                                    <td>{{ $item->Pendaftaran->riwayat_alergi }}</td>
                                    <td>{{ $item->Pendaftaran->poliklinik->nama_poli}}</td>
                                    <td>{{ $item->hasil_pemeriksaan }}</td>
                                    <td>{{ $item->diagnosis }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->tgl_pemeriksaan }}</td>
                                    <td>
                                        <a href="{{ url('editpemeriksaan', $item->id) }}"><i class="fa-solid fa-wand-magic-sparkles"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="9" class="text-center">Tidak ada data pemeriksaan</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{ $dtpemeriksaan->links() }}
                </div>
            </div>
        </section>
    </div>
</div>
@endsection