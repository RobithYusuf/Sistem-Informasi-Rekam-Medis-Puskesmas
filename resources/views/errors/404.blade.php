<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>404 Error Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .error-page {
            max-width: 400px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">

    <!-- Main content -->
    <div class="error-page">
        <h2 class="headline text-warning"> 404</h2>

        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-warning"></i> <strong> <strong>Oops! Halaman yang Anda cari tampaknya tidak ditemukan.</strong></strong></h3>

            <p>
                Kami tidak dapat menemukan halaman yang Anda cari.
                Sementara itu, Anda mungkin ke halalaman lain
            <p><a href="{{ url('/') }}" class="btn btn-primary w-100">kembali ke beranda</a>
            </p>
            </p>

            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

        </div>
    </div>

    <!-- REQUIRED SCRIPTS -->
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>

</body>

</html>
