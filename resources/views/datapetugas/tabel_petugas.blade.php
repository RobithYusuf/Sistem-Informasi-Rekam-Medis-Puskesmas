@extends('index_tabel')
@section('judul','Petugas')
@section('before_judul_tabel','Data Petugas')
@section('judul_tabel','Tabel Petugas')
@section('content')
<div class="content">
    <div class="container-fluid">
        <section class="content">

            <div class="card">
                <div class="card-header">

                    <head>
                        <link rel="stylesheet" href="css/stylejudul.css">
                    </head>

                    <body>
                        <h3 class="card-title">Data Petugas</h3>
                    </body>
                    <div class="card-tools">
                        <a href="{{ route('tambahpetugas') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>

                    </div>

                </div>



                <head>
                    <link rel="stylesheet" href="css/stylee.css">
                </head>

                <body>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 100px">ID</th>
                                    <th style="width: 100px">Foto Profil</th>
                                    <th style="width: 100px">Nama</th>
                                    <th style="width: 100px">No. Telp</th>
                                    <th style="width: 100px">Tgl Lahir</th>
                                    <th style="width: 100px">Alamat</th>
                                    <th style="width: 80px">Action</th>
                                </tr>

                                @foreach ($dtpetugas as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        @if ($item->user->foto_profil && Storage::disk('public')->exists('FotoPetugas/' . $item->user->foto_profil))
                                        <img src="{{ asset('storage/FotoPetugas/'. $item->user->foto_profil) }}" alt="Foto Profil" class="img-circle elevation-2" style="width: 50px; height: 50px; object-fit: cover;">
                                        @else
                                        <img src="{{ asset('images/default_foto_profil.jpeg') }}" alt="Default Profil" class="img-circle elevation-2" style="width: 50px; height: 50px; object-fit: cover;">
                                        @endif
                                    </td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->telp }}</td>
                                    <td>{{ $item->tgl_lahir }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>
                                        <a href="{{ url('editpetugas', $item->id) }}"><i class="fa-solid fa-wand-magic-sparkles"></i></a>

                                        <a href="{{ url('deletepetugas', $item->id) }}"><i class="fa-solid fa-person-circle-minus" style="color: red"></i></a>
                                    </td>
                                </tr>

                                @endforeach


                            </thead>
                        </table>
                        <div class="card-footer ">
                            {{ $dtpetugas->links() }}
                        </div>


                    </div>
            </div>

        </section>
    </div>
</div>
@endsection