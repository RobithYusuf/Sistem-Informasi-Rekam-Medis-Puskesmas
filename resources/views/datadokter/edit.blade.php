<!DOCTYPE html>

<html lang="en">

<head>
    <title>Edit Dokter</title>

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
                                            <h1 class="m-0">Data Dokter</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="datadokter-masuk">Data Dokter</a></li>
                                                <li class="breadcrumb-item active">Edit Data Dokter</li>
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
                                                <h3 class="card-title">Edit Data Dokter</h3>
                                            </div>



                                            <div class="card-body">
                                                <form action="{{ url('updatedokter',$edtdokter->id) }}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                    <div class="form-group">
                                                        <input type="text" id="id" name="id" class="form-control" placeholder="ID Petugas" value="{{ $edtdokter->id }}" disabled>
                                                    </div>


                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <input type="text" id="gelar_awal" name="gelar_awal" class="form-control" placeholder="Gelar Awal" value="{{ $edtdokter->gelar_awal }}">
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Dokter" value="{{ $edtdokter->nama }}">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="text" id="gelar_akhir" name="gelar_akhir" class="form-control" placeholder="Gelar Akhir" value="{{ $edtdokter->gelar_akhir }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="form-control select2" style="width: 100%;" name="datapoli_id" id="datapoli_id">
                                                            <option disabled value>Pilih Poliklinik</option>
                                                            <option value="{{ $edtdokter->datapoli_id }}">{{ $edtdokter->Datapoli->nama_poli }}</option>
                                                            @foreach ($poli as $item)
                                                            <option value="{{  $item->id }}">{{ $item->nama_poli }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" id="telp" name="telp" class="form-control" placeholder="Nomor Telepon" value="{{ $edtdokter->telp }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $edtdokter->tgl_lahir }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="foto_profil">Alamat</label>
                                                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat">{{ $edtdokter->alamat }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="foto_profil">Foto Profil</label>
                                                        <input type="file" class="form-control" id="foto_profil" name="foto_profil">
                                                    </div>


                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                                                    </div>

                                                </form>
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