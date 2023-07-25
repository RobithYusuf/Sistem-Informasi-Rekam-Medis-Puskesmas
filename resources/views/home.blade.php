<!DOCTYPE html>

<html lang="en">

<head>
    <title>Dashboard Puskesmas</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('Template.head')
        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">


        <body class="hold-transition sidebar-mini layout-fixed">
            <div class="wrapper">

                <body class="hold-transition sidebar-mini">
                    <div class="wrapper">

                        @include('Template.navbar')

                        @include('Template.left-sidebar')

                        <head>
                            <link rel="stylesheet" href="css/stylehome.css">
                        </head>

                        <body>
                            <div class="content-wrapper">
                                <div class="content-header">
                                    <div class="container-fluid">
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <h1 class="m-0">DASHBOARD</h1>
                                            </div>
                                            <div class="col-sm-6">
                                                <ol class="breadcrumb float-sm-right">
                                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                    <li class="breadcrumb-item active">DASHBOARD</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="small-box bg-info">
                                                    <div class="inner">
                                                        <h3>{{ $visitCount }}</h3>
                                                        <p>Kunjungan / Bulan</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-bag"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">More info <i
                                                            class="fas fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="small-box bg-success">
                                                    <div class="inner">
                                                        <h3>{{ $totalPatients }}</h3>
                                                        <p>Jumlah Pasien</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-stats-bars"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">More info <i
                                                            class="fas fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="small-box bg-warning">
                                                    <div class="inner">
                                                        <h3>000</h3>
                                                        <p>Obat / Bulan</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-person-add"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">More info <i
                                                            class="fas fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-danger">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Donut Chart</h3>
                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool"
                                                                data-card-widget="collapse">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool"
                                                                data-card-widget="remove">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <canvas id="donutChart"
                                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <aside class="control-sidebar control-sidebar-dark">
                                <div class="p-3">
                                    <h5>Title</h5>
                                    <p>Sidebar content</p>
                                </div>
                            </aside>
                        </body>

                        @include('Template.footer')

                    </div>
                    @include('Template.script')


                    <link rel="stylesheet" href="{{ asset('font/css/all.min.css') }}">

                    @include('sweetalert::alert')


                </body>

</html>
