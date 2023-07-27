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
                                                <li class="breadcrumb-item active">Tambah Data Dokter</li>
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
                                                <h3 class="card-title">Tambah Data Dokter</h3>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ route('simpandokter') }}" method="post" enctype="multipart/form-data">

                                                    {{ csrf_field() }}

                                                    <div class="form-group">

                                                        <label for="id">ID Dokter</label>
                                                        <input type="text" id="id" name="id" class="form-control" placeholder="ID Dokter" required value="{{ $newId }}" readonly>

                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <label for="gelar_awal">Gelar Awal</label>
                                                            <input type="text" id="gelar_awal" name="gelar_awal" class="form-control" placeholder="Gelar Awal" required oninvalid="this.setCustomValidity('Gelar Awal Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <label for="nama">Nama Dokter</label>
                                                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Dokter" required oninvalid="this.setCustomValidity('Nama Dokter Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label for="gelar_akhir">Gelar Akhir</label>
                                                            <input type="text" id="gelar_akhir" name="gelar_akhir" class="form-control" placeholder="Gelar Akhir" required oninvalid="this.setCustomValidity('Gelar Akhir Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="datapoli_id">Pilih Poliklinik</label>
                                                        <select class="form-control select2" style="width: 100%;" name="datapoli_id" id="datapoli_id">
                                                            <option disabled value>Pilih Poliklinik</option>
                                                            @foreach ($poli as $item)
                                                            <option value="{{  $item->id }}">{{ $item->nama_poli }}</option>
                                                            @endforeach
                                                        </select>
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
