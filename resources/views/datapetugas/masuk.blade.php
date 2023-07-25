<!DOCTYPE html>

<html lang="en">

<head>
    <title>Data Petugas</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('LogoPuskesmas.jpeg') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('Template.head')

        </head>

        <body class="hold-transition sidebar-mini layout-fixed">
            <div class="wrapper">
                <body class="hold-transition sidebar-mini">
                    <div class="wrapper">

                        @include('Template.navbar')

                        @include('Template.left-sidebar')

                        <div class="content-wrapper">

                            <div class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <style>
                                                .m-0 {
                                                    font-family: Town;
                                                }
                                            </style>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                                                <li class="breadcrumb-item active">DATA PETUGAS</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>



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
                                                                <th style="width: 100px">Nama</th>
                                                                <th style="width: 100px">No. Telp</th>
                                                                <th style="width: 100px">Tgl Lahir</th>
                                                                <th style="width: 100px">Alamat</th>
                                                                <th style="width: 80px">Action</th>
                                                            </tr>

                                                            @foreach ($dtpetugas as $item)
                                                            <tr>
                                                                <td>{{ $item->id }}</td>
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
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                    <div class="card-footer ">
                                                        {{ $dtpetugas->links() }}
                                                    </div>


                                                </div>
                                        </div>

                                </div>
                                </section>
                            </div>
                        </div>
                    </div>



                    <aside class="control-sidebar control-sidebar-dark">

                        <div class="p-3">
                            <h5>Title</h5>
                            <p>Sidebar content</p>
                        </div>
                    </aside>

                    @include('Template.footer')

            </div>
            @include('Template.script')

            <link rel="stylesheet" href="{{ asset('font/css/all.min.css') }}">

            @include('sweetalert::alert')

        </body>

</html>
