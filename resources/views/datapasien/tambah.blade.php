
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

  @include('Template.left-sidebar')

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
    <h3 class="card-title">TAMBAH DATA KEPALA KELUARGA</h3>
    </div>
    <div class="card-body">
  <form action="{{ route('simpanpasien') }}" method="post">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name1">NIK KK:</label>
                <input type="text" id="nik_kk" name="nik_kk" class="form-control" placeholder="NIK KK" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name2">Nama Kepala Keluarga:</label>
                <input type="text" id="nama_kepala" name="nama_kepala" class="form-control" placeholder="Nama Kepala Keluarga" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
            </div>
        </div>
    </div>
    </div>
 </section>

 <section class="content">
 <div class="card">
    <div class="card-header">
    <h3 class="card-title">TAMBAH DATA PASIEN</h3>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
              <div class="form-group">
                  <label for="name1">ID:</label>
                  <input type="text" id="id" name="id" class="form-control" placeholder="ID" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
              </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                  <label for="name2">Kode KK:</label>
                  <input type="text" id="kode_kk" name="kode_kk" class="form-control" placeholder="Masukkan Kode KK" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
              </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
                <label for="name2">Nik Pasien:</label>
                <input type="text" id="nik" name="nik" class="form-control" placeholder="Masukkan NIK" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="name3">No RM:</label>
                <input type="text" id="no_rm" name="no_rm" class="form-control" placeholder="Masukkan Nomor RM" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="name4">Alamat :</label>
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="name5">Tanggal Lahir:</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required oninvalid="this.setCustomValidity('Tanggal Lahir Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="name6">No Kartu:</label>
                <input type="text" id="no_kartu" name="no_kartu" class="form-control" placeholder="Masukkan Nomor Kartu" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="name3">Nama Pasien :</label>
                <input type="text" id="nama_pasien" name="nama_pasien" class="form-control" placeholder="Masukkan Nama Pasien" required oninvalid="this.setCustomValidity('ID Pasien Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
            </div>
          </div>
      </div>
          <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label for="name7">Agama :</label>
                <select class="form-select" name= "agama" aria-label="Default select example">
          <option value="">Pilih Agama</option>
          <option value="Islam">Islam</option>
          <option value="Kristen Protestan">Kristen Protestan</option>
          <option value="Kristen Katolik">Kristen Katolik</option>   
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Khonghucu">Khonghucu</option>   
          </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="name8">Hubungan Keluarga :</label>
                <select class="form-select" name= "hubungan" aria-label="Default select example">
          <option value="">Pilih Hubungan Keluarga</option>
          <option value="suami">Suami</option>
          <option value="istri">Istri</option>
          <option value="anak">Anak</option>   
          </select>
            </div>
        </div>  
        </div>
        <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label for="name9">Jenis Kelamin :</label>
                <select class="form-select" name= "jenis_kelamin" aria-label="Default select example">
          <option value="">Pilih Jenis Kelamin</option>
          <option value="laki-laki">Laki-Laki</option>
          <option value="perempuan">Perempuan</option>  
          </select>
            </div>
        </div>
      </div>

        <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan Data</button>
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
