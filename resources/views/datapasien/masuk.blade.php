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

                                                <head>
                                                    <link rel="stylesheet" href="css/stylejudul.css">
                                                </head>

                                                <body>
                                                    <h3 class="card-title">Data Pasien</h3>
                                                </body>
                                                <div class="card-tools">
                                                    <a href="{{ route('tambahpasien') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                                                </div>
                                            </div>


                                            <div class="card-body">
                                                <div class="table-responsive" style="overflow-x: auto;">
                                                    <table class="table table-bordered responsive-table">
                                                        <link rel="stylesheet" href="css/style.css">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 100px">ID</th>
                                                                <th style="width: 200px">NIK KK</th>
                                                                <th style="width: 400px">Kepala Keluarga</th>
                                                                <th style="width: 270px">Nama Pasien</th>
                                                                <th style="width: 160px">Kode KK</th>
                                                                <th style="width: 150px">NIK Pasien</th>
                                                                <th style="width: 150px">No RM</th>
                                                                <th style="width: 200px">No Kartu</th>
                                                                <th style="width: 200px">Alamat</th>
                                                                <th style="width: 200px">Hubungan Keluarga</th>
                                                                <th style="width: 200px">Tanggal Lahir</th>
                                                                <th style="width: 250px">Jenis Kelamin</th>
                                                                <th style="width: 300px">Alamat</th>
                                                                <th style="width: 80px">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($dtpasien as $item)
                                                            <tr>
                                                                <td>{{ $item->id }}</td>
                                                                <td>{{ $item->nik_kk }}</td>
                                                                <td>{{ $item->nama_kepala }}</td>
                                                                <td>{{ $item->nama_pasien }}</td>
                                                                <td>{{ $item->kode_kk }}</td>
                                                                <td>{{ $item->nik }}</td>
                                                                <td>{{ $item->no_rm }}</td>
                                                                <td>{{ $item->no_kartu }}</td>
                                                                <td>{{ $item->alamat }}</td>
                                                                <td>{{ $item->hubungan }}</td>
                                                                <td>{{ $item->tgl_lahir }}</td>
                                                                <td>{{ $item->jenis_kelamin }}</td>
                                                                <td>{{ $item->agama }}</td>
                                                                <td>
                                                                    <a href="{{ url('editpasien', $item->id) }}"><i class="fa-solid fa-wand-magic-sparkles"></i></a>
                                                                    <a href="{{ url('deletepasien', $item->id) }}"><i class="fa-solid fa-person-circle-minus" style="color: red"></i></a>
                                                                </td>
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
                                                {{ $dtpasien->links() }}
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