<!DOCTYPE html>

<html lang="en">

<head>
    <title>Data Pemeriksaan</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('LogoPuskesmas.jpeg') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('Template.head')
        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

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
                                                <li class="breadcrumb-item active">DATA PEMERIKSAAN</li>
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
                                                    <h3 class="card-title">Data PEMERIKSAAN</h3>
                                                </body>
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
                                                {{ $dtpemeriksaan->links() }}
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
