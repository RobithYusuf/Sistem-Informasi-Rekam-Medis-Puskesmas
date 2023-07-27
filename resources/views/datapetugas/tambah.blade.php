<!DOCTYPE html>

<html lang="en">

<head>
    <title>Tambah Petugas</title>

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

                        <div class="content-wrapper">

                            <div class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1 class="m-0">Data Petugas</h1>
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
                                                <h3 class="card-title">Tambah Data Petugas</h3>
                                            </div>

                                            <div class="card-body">
                                                <form action="{{ route('simpanpetugas') }}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                    <div class="form-group">
                                                        <label for="id">ID Petugas</label>
                                                        <input type="text" id="id" name="id" class="form-control" placeholder="ID Petugas" required value="{{ $newId }}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Nama Petugas</label>
                                                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Petugas" required oninvalid="this.setCustomValidity('Nama Petugas Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="telp">Nomor HP</label>
                                                        <input type="text" id="telp" name="telp" class="form-control" placeholder="Nomor Telepon" required oninvalid="this.setCustomValidity('Nomor Telepon Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required oninvalid="this.setCustomValidity('Tanggal Lahir Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="alamat">Alamat</label>
                                                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat" required oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong')" oninput="this.setCustomValidity('')"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="foto_profil">Foto Profil</label>
                                                        <input type="file" class="form-control" id="foto_profil" name="foto_profil">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success">Simpan Data</button>
                                                    </div>

                                                </form>
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
