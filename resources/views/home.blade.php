
<!DOCTYPE html>

<html lang="en">
<head>
  <title>AdminLTE 3 | Starter</title>

  <script nonce="88fe3ff2-446a-4ff5-ad15-d1433dbb1d76">(function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl})}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})))))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by)}}));bo.referrerPolicy="origin";bo.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      @include('Template.head')
      <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
      <script nonce="88fe3ff2-446a-4ff5-ad15-d1433dbb1d76">(function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl})}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})))))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by)}}));bo.referrerPolicy="origin";bo.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
      <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
          <script nonce="0c3fcacc-2dba-49f8-bc1a-7efd6b31210b">(function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl})}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})))))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by)}}));bo.referrerPolicy="origin";bo.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
          <body class="hold-transition sidebar-mini">
            <div class="wrapper">

              @include('Template.navbar')

              <aside class="main-sidebar sidebar-dark-primary elevation-4">

                <a href="index3.html" class="brand-link">
                  <img src="images/logo_puskesmas.png" alt="Puskesmas Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                  <span class="brand-text font-weight-light">Puskesmas Parsoburan</span>
                </a>
                <div class="sidebar">

                  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                      <img src="images/timothy.jpg" class="img-circle elevation-2" alt="User Image">
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
                        <a href="#" class="nav-link">
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
                        <a href="#" class="nav-link active">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                            PENDAFTARAN
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>

                        <ul class="nav nav-treeview">
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
                            <a href="#" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Data KIB</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      @endif

                      @if (auth()->user()->role == "dokter")
                      <li class="nav-item">
                        <a href="{{ url ('datapemeriksaan-masuk') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Pemeriksaan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Resep Obat</p>
                        </a>
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
                              <h3>000</h3>
                              <p>Kunjungan / Bulan</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3>000</h3>
                              <p>Jumlah Pasien</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="card card-danger">
                            <div class="card-header">
                              <h3 class="card-title">Donut Chart</h3>
                              <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                  <i class="fas fa-times"></i>
                                </button>
                              </div>
                            </div>
                            <div class="card-body">
                              <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
