<!DOCTYPE html>

<html lang="en">

<head>
    <title>Data Pasien</title>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('Template.head')

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
                                                <li class="breadcrumb-item active">DATA PASIEN</li>
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
                                                    <h3 class="card-title">Data Pasien</h3>
                                                </body>
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


                                            </thead>
                                            <tbody>

                                            </tbody>
                                            </table>
                                            <div class="card-footer ">
                                                {{ $dtpasien->links() }}
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
