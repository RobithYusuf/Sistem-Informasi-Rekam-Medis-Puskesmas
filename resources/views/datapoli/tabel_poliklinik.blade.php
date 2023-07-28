@extends('index_tabel')
@section('judul','Poliklinik')
@section('before_judul_tabel','Data Poliklinik')
@section('judul_tabel','Tabel Poliklinik')
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
                        <h3 class="card-title">Data Poliklinik</h3>
                    </body>
                    <div class="card-tools">
                        <a href="{{ route('tambahpoli') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>

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
                                    <th style="width: 100px">Nama Poklinik</th>
                                    <th style="width: 100px">Ruangan</th>
                                    <th style="width: 80px">Action</th>
                                </tr>

                                @foreach ($dtpoli as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama_poli }}</td>
                                    <td>{{ $item->ruangan }}</td>
                                    <td>
                                        <a href="{{ url('editpoli', $item->id) }}"><i class="fa-solid fa-wand-magic-sparkles"></i></a>
                                        |
                                        <a href="{{ url('deletepoli', $item->id) }}"><i class="fa-solid fa-person-circle-minus" style="color: red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>
                        <div class="card-footer ">
                            {{ $dtpoli->links() }}
                        </div>
                    </div>
                </body>
            </div>

        </section>
    </div>
</div>

@endsection