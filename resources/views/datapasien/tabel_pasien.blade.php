@extends('index_tabel')
@section('judul','Pasien')
@section('before_judul_tabel','Data Pasien')
@section('judul_tabel','Tabel Pasien')

@section('content')

<div class="content">
    <div class="container-fluid">
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pasien</h3>
                    <div class="card-tools">
                        <a href="{{ route('tambahpasien') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive" style="overflow-x: auto;">
                        <table class="table table-bordered responsive-table">
                            <link rel="stylesheet" href="css/style.css">
                            <thead>
                                <tr>
                                    <th style="width: 100px">ID</th>
                                    <th style="width: 200px">NIK KK</th>
                                    <th style="width: 400px">Kepala Keluarga</th>
                                    <th style="width: 270px">Nama Pasien</th>
                                    <th style="width: 160px">Kode KK</th>
                                    <th style="width: 150px">NIK Pasien</th>
                                    <th style="width: 150px">No RM</th>
                                    <th style="width: 200px">No Kartu</th>
                                    <th style="width: 200px">Alamat</th>
                                    <th style="width: 200px">Hubungan Keluarga</th>
                                    <th style="width: 200px">Tanggal Lahir</th>
                                    <th style="width: 250px">Jenis Kelamin</th>
                                    <th style="width: 300px">Alamat</th>
                                    <th style="width: 80px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtpasien as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nik_kk }}</td>
                                    <td>{{ $item->nama_kepala }}</td>
                                    <td>{{ $item->nama_pasien }}</td>
                                    <td>{{ $item->kode_kk }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->no_rm }}</td>
                                    <td>{{ $item->no_kartu }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->hubungan }}</td>
                                    <td>{{ $item->tgl_lahir }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->agama }}</td>
                                    <td>
                                        <a href="{{ url('editpasien', $item->id) }}"><i class="fa-solid fa-wand-magic-sparkles"></i></a>
                                        <a href="{{ url('deletepasien', $item->id) }}"><i class="fa-solid fa-person-circle-minus" style="color: red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer ">
                    {{ $dtpasien->links() }}
                </div>
            </div>
        </section>
    </div>
</div>

@endsection