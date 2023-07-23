<!DOCTYPE html>

<html lang="en">

<head>
    <title>AdminLTE 3 | Starter</title>

    <script nonce="88fe3ff2-446a-4ff5-ad15-d1433dbb1d76">
        (function(w, d) {
            ! function(bg, bh, bi, bj) {
                bg[bi] = bg[bi] || {};
                bg[bi].executed = [];
                bg.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bg.zaraz.q = [];
                bg.zaraz._f = function(bk) {
                    return function() {
                        var bl = Array.prototype.slice.call(arguments);
                        bg.zaraz.q.push({
                            m: bk,
                            a: bl
                        })
                    }
                };
                for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm);
                bg.zaraz.init = () => {
                    var bn = bh.getElementsByTagName(bj)[0],
                        bo = bh.createElement(bj),
                        bp = bh.getElementsByTagName("title")[0];
                    bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text);
                    bg[bi].x = Math.random();
                    bg[bi].w = bg.screen.width;
                    bg[bi].h = bg.screen.height;
                    bg[bi].j = bg.innerHeight;
                    bg[bi].e = bg.innerWidth;
                    bg[bi].l = bg.location.href;
                    bg[bi].r = bh.referrer;
                    bg[bi].k = bg.screen.colorDepth;
                    bg[bi].n = bh.characterSet;
                    bg[bi].o = (new Date).getTimezoneOffset();
                    if (bg.dataLayer)
                        for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({
                                ...bu[1],
                                ...bv[1]
                            }))))) zaraz.set(bt[0], bt[1], {
                            scope: "page"
                        });
                    bg[bi].q = [];
                    for (; bg.zaraz.q.length;) {
                        const bw = bg.zaraz.q.shift();
                        bg[bi].q.push(bw)
                    }
                    bo.defer = !0;
                    for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => {
                        try {
                            bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by))
                        } catch {
                            bg[bi]["z_" + by.slice(7)] = bx.getItem(by)
                        }
                    }));
                    bo.referrerPolicy = "origin";
                    bo.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi])));
                    bn.parentNode.insertBefore(bo, bn)
                };
                ["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('Template.head')
        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
        <script nonce="88fe3ff2-446a-4ff5-ad15-d1433dbb1d76">
            (function(w, d) {
                ! function(bg, bh, bi, bj) {
                    bg[bi] = bg[bi] || {};
                    bg[bi].executed = [];
                    bg.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    bg.zaraz.q = [];
                    bg.zaraz._f = function(bk) {
                        return function() {
                            var bl = Array.prototype.slice.call(arguments);
                            bg.zaraz.q.push({
                                m: bk,
                                a: bl
                            })
                        }
                    };
                    for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm);
                    bg.zaraz.init = () => {
                        var bn = bh.getElementsByTagName(bj)[0],
                            bo = bh.createElement(bj),
                            bp = bh.getElementsByTagName("title")[0];
                        bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text);
                        bg[bi].x = Math.random();
                        bg[bi].w = bg.screen.width;
                        bg[bi].h = bg.screen.height;
                        bg[bi].j = bg.innerHeight;
                        bg[bi].e = bg.innerWidth;
                        bg[bi].l = bg.location.href;
                        bg[bi].r = bh.referrer;
                        bg[bi].k = bg.screen.colorDepth;
                        bg[bi].n = bh.characterSet;
                        bg[bi].o = (new Date).getTimezoneOffset();
                        if (bg.dataLayer)
                            for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({
                                    ...bu[1],
                                    ...bv[1]
                                }))))) zaraz.set(bt[0], bt[1], {
                                scope: "page"
                            });
                        bg[bi].q = [];
                        for (; bg.zaraz.q.length;) {
                            const bw = bg.zaraz.q.shift();
                            bg[bi].q.push(bw)
                        }
                        bo.defer = !0;
                        for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => {
                            try {
                                bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by))
                            } catch {
                                bg[bi]["z_" + by.slice(7)] = bx.getItem(by)
                            }
                        }));
                        bo.referrerPolicy = "origin";
                        bo.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi])));
                        bn.parentNode.insertBefore(bo, bn)
                    };
                    ["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document);
        </script>
        </head>

        <body class="hold-transition sidebar-mini layout-fixed">
            <div class="wrapper">
                <script nonce="0c3fcacc-2dba-49f8-bc1a-7efd6b31210b">
                    (function(w, d) {
                        ! function(bg, bh, bi, bj) {
                            bg[bi] = bg[bi] || {};
                            bg[bi].executed = [];
                            bg.zaraz = {
                                deferred: [],
                                listeners: []
                            };
                            bg.zaraz.q = [];
                            bg.zaraz._f = function(bk) {
                                return function() {
                                    var bl = Array.prototype.slice.call(arguments);
                                    bg.zaraz.q.push({
                                        m: bk,
                                        a: bl
                                    })
                                }
                            };
                            for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm);
                            bg.zaraz.init = () => {
                                var bn = bh.getElementsByTagName(bj)[0],
                                    bo = bh.createElement(bj),
                                    bp = bh.getElementsByTagName("title")[0];
                                bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text);
                                bg[bi].x = Math.random();
                                bg[bi].w = bg.screen.width;
                                bg[bi].h = bg.screen.height;
                                bg[bi].j = bg.innerHeight;
                                bg[bi].e = bg.innerWidth;
                                bg[bi].l = bg.location.href;
                                bg[bi].r = bh.referrer;
                                bg[bi].k = bg.screen.colorDepth;
                                bg[bi].n = bh.characterSet;
                                bg[bi].o = (new Date).getTimezoneOffset();
                                if (bg.dataLayer)
                                    for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({
                                            ...bu[1],
                                            ...bv[1]
                                        }))))) zaraz.set(bt[0], bt[1], {
                                        scope: "page"
                                    });
                                bg[bi].q = [];
                                for (; bg.zaraz.q.length;) {
                                    const bw = bg.zaraz.q.shift();
                                    bg[bi].q.push(bw)
                                }
                                bo.defer = !0;
                                for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => {
                                    try {
                                        bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by))
                                    } catch {
                                        bg[bi]["z_" + by.slice(7)] = bx.getItem(by)
                                    }
                                }));
                                bo.referrerPolicy = "origin";
                                bo.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi])));
                                bn.parentNode.insertBefore(bo, bn)
                            };
                            ["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init)
                        }(w, d, "zarazData", "script");
                    })(window, document);
                </script>
                </head>

                <body class="hold-transition sidebar-mini">
                    <div class="wrapper">

                        @include('Template.navbar')

                        <aside class="main-sidebar sidebar-dark-primary elevation-4">

                            <a href="index3.html" class="brand-link">
                                <img src="{{ asset('images/logo_puskesmas.png') }}" alt="Puskesmas Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                                <span class="brand-text font-weight-light">Puskesmas Parsoburan</span>
                            </a>

                            <div class="sidebar">

                                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                    <div class="image">
                                        <img src="{{ asset('images/timothy.jpg') }}" class="img-circle elevation-2" alt="User Image">
                                    </div>
                                    <div class="info">
                                        <a href="#" class="d-block">Timothy Sianipar</a>
                                        <a>Admin</a>
                                    </div>

                                </div>


                                <div class="form-inline">
                                    <div class="input-group" data-widget="sidebar-search">
                                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-sidebar">
                                                <i class="fas fa-search fa-fw"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <nav class="mt-2">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                                        <li class="nav-item">
                                            <a href="{{ url ('home') }}" class="nav-link">
                                                <i class="nav-icon fa-solid fa-house-user"></i>
                                                <p>
                                                    DASHBOARD
                                                </p>
                                            </a>
                                        </li>
                                        @if (auth()->user()->role == "admin")
                                        <li class="nav-item has- treeview">
                                            <a href="#" class="nav-link active">
                                                <i class="nav-icon fa-solid fa-file-shield"></i>
                                                <p>
                                                    MASTER DATA
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url ('datapetugas-masuk') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Data Petugas</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url ('datadokter-masuk') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Data Dokter</p>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="{{ url ('datapoli-masuk') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Data Poliklinik</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        @endif

                                        @if (auth()->user()->role == "petugas")
                                        <li class="nav-item has- treeview">
                                            <a href="{{ url ('datapasien-masuk') }}" class="nav-link">
                                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                                <p>
                                                    PENDAFTARAN
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>

                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link active">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Input Data Pendaftaran</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url ('datapasien-masuk') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Data Pasien</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url ('datapendaftaran-masuk') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Data Pendaftaran</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url ('datapendaftaran-masuk') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Data KIB</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        @endif


                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fa-solid fa-house-medical-flag"></i>
                                                <p>
                                                    REKAM MEDIS

                                                </p>
                                            </a>

                                        <li class="nav-item">
                                            <a href="{{ route('logout') }}" class="nav-link">

                                                <button type="button" class="btn btn-block btn-light btn-sm">LOGOUT</button>
                                            </a>
                                        </li>
                                        </li>
                                    </ul>
                                </nav>

                            </div>

                        </aside>

                        <div class="content-wrapper">

                            <div class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1 class="m-0">Data Dokter</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                                                <li class="breadcrumb-item active">DATA DOKTER</li>
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
                                                <form action="{{ url('updatedokter',$edtdokter->id) }}" method="post">
                                                    {{ csrf_field() }}

                                                    <div class="form-group">
                                                        <input type="text" id="id" name="id" class="form-control" placeholder="ID Petugas" value="{{ $edtdokter->id }}">
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
                                                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat">{{ $edtdokter->alamat }}</textarea>
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