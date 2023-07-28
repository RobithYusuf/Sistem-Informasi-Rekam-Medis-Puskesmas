<!DOCTYPE html>

<html lang="en">

<head>
    <title>Dashboard Puskesmas</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('LogoPuskesmas.jpeg') }}">
    <link rel="stylesheet" href="{{ asset('font/css/all.min.css') }}">
    <link rel="stylesheet" href="css/stylehome.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('Template.head')
        @include('Template.navbar')
        @include('Template.left-sidebar')

        @if (Auth::user()->role == 'dokter')
        @include('Template.modaleditprofiledokter')

        @elseif (Auth::user()->role == 'petugas')
        @include('Template.modaleditprofile')
        @endif

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">DASHBOARD</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="home">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>

        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
    </div>
    @include('Template.script')
    @include('sweetalert::alert')
</body>

</html>
