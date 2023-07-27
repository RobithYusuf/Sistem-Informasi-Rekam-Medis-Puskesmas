<!DOCTYPE html>

<html lang="en">

<head>
    <title>Data Pendaftaran</title>
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
                        @include('Template.modaleditprofile')
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
                                                <li class="breadcrumb-item active">DATA PENDAFTARAN</li>
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
                                                    <h3 class="card-title">Data Pendaftaran</h3>
                                                </body>
                                                <div class="card-tools">
                                                    <a href="{{ route('tambahpendaftaran') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>

                                                </div>

                                            </div>



                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <link rel="stylesheet" href="css/style.css">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 100px">ID</th>
                                                            <th style="width: 100px">Pelayanan</th>
                                                            <th style="width: 100px">Nama Pasien</th>
                                                            <th style="width: 100px">Poliklinik</th>
                                                            <th style="width: 100px">Jenis Kelamin</th>
                                                            <th style="width: 100px">Riwayat Alergi</th>
                                                            <th style="width: 100px">Nomor Registrasi</th>
                                                            <th style="width: 100px">Status</th>
                                                            <th style="width: 80px">Nomor BPJS</th>
                                                            <th style="width: 80px">Status Pendaftaran</th>
                                                            <th style="width: 80px">Action</th>
                                                        </tr>

                                                        @foreach ($dtpendaftaran as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->pelayanan }}</td>
                                                            <td>{{ $item->pasien->nama_pasien }}</td>
                                                            <td>{{ $item->poliklinik->nama_poli }}</td>
                                                            <td>{{ $item->pasien->jenis_kelamin }}</td>
                                                            <td>{{ $item->riwayat_alergi }}</td>
                                                            <td>{{ $item->no_registrasi }}</td>
                                                            <td>{{ $item->status }}</td>
                                                            <td>{{ $item->no_bpjs }}</td>
                                                            <td>{{ $item->status_pendaftaran }}</td>
                                                            <td>
                                                                <a href="{{ url('editpendaftaran', $item->id) }}"><i class="fa-solid fa-wand-magic-sparkles"></i></a>


                                                                <a href="{{ url('deletependaftaran', $item->id) }}"><i class="fa-solid fa-person-circle-minus" style="color: red"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        </tbody>
                                        </table>
                                        <div class="card-footer ">
                                            {{ $dtpendaftaran->links() }}
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