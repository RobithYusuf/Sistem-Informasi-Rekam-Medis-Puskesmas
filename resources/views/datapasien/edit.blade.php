<!DOCTYPE html>

<html lang="en">

<head>
    <title>Edit Pasien</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('Template.head')
        <body class="hold-transition sidebar-mini layout-fixed">
            <div class="wrapper">

                </head>

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
                                            <h1 class="m-0">Data Pasien</h1>
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
                                                <h3 class="card-title">Edit Data Pasien</h3>
                                            </div>



                                            <div class="card-body">
                                                <form action="{{ url('updatepasien',$edtpasien->id) }}" method="post">
                                                    {{ csrf_field() }}

                                                    <div class="form-group">
                                                        <input type="text" id="id" name="id" class="form-control" placeholder="ID Petugas" value="{{ $edtpasien->id }}">
                                                    </div>


                                                    <div class="form-group">
                                                        <input type="text" id="kode_kk" name="kode_kk" class="form-control" placeholder="Kode KK" value="{{ $edtpasien->kode_kk }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" id="nama_kepala" name="nama_kepala" class="form-control" placeholder="Nama Kepala Keluarga" value="{{ $edtpasien->nama_kepala }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" id="nama_pasien" name="nama_pasien" class="form-control" placeholder="Nama Kepala Keluarga" value="{{ $edtpasien->nama_pasien }}">
                                                    </div>


                                                    <div class="form-group">
                                                        <input type="text" id="nik" name="nik" class="form-control" placeholder="NIK" value="{{ $edtpasien->nik }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" id="no_rm" name="no_rm" class="form-control" placeholder="Nomor Rekam Medis" value="{{ $edtpasien->no_rm }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat">{{ $edtpasien->alamat }}</textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $edtpasien->tgl_lahir }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" id="no_kartu" name="no_kartu" class="form-control" placeholder="Nomor Kartu" value="{{ $edtpasien->no_kartu }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="form-select" name="agama" aria-label="Default select example">
                                                            <option selected>Pilih Agama</option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                                            <option value="Kristen Katolik">Kristen Katolik</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Buddha">Buddha</option>
                                                            <option value="Khonghucu">Khonghucu</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="form-select" name="hubungan" aria-label="Default select example">
                                                            <option selected>Pilih Hubungan Keluarga</option>
                                                            <option value="suami">Suami</option>
                                                            <option value="istri">Istri</option>
                                                            <option value="anak">Anak</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                                            <option value="">Pilih Jenis Kelamin</option>
                                                            <option value="laki-laki">Laki-Laki</option>
                                                            <option value="perempuan">Perempuan</option>
                                                        </select>
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




                </body>

</html>
