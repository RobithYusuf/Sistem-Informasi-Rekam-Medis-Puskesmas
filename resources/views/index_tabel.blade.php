<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('judul')</title>
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
                            <style>
                                .m-0 {
                                    font-family: Town;
                                }
                            </style>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">@yield('before_judul_tabel')</a></li>
                                <li class="breadcrumb-item active">@yield('judul_tabel')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

        </div>
        @include('Template.footer')
    </div>
    @include('Template.script')
    <script>
        $(document).ready(function() {
            var table = $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": [{
                        extend: 'copy',
                        text: 'Copy Tabel' // mengubah teks tombol Copy menjadi 'Copy Tabel'
                    },
                    {
                        extend: 'excel',
                        text: 'Cetak Excel' // mengubah teks tombol Excel menjadi 'Cetak Excel'
                    }
                ]
            });

            table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script>
        function submitSearch() {
            var searchForm = document.getElementById('searchForm');
            if (searchForm && searchForm.checkValidity()) {
                searchForm.submit();
            } else {
                console.error('search form not valid or not found');
            }
        }
    </script>
    @include('sweetalert::alert')
</body>

</html>