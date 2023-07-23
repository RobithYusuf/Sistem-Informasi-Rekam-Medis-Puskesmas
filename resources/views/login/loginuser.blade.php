<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PUSKESMAS | Log in (v2)</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">

<link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css?v=3.2.0')}}">
<script nonce="bd2311c1-04a2-4de0-ae95-1cb7da565671">(function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl})}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})))))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by)}}));bo.referrerPolicy="origin";bo.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_QpYA0iEZzb.json"  background="transparent"  speed="1"  style="position: relative; width: 500px; height: 500px; right: 250px;
        top: -20px;"  loop autoplay></lottie-player>
     
        </div>
      </div>
    </div>
  </section>

  <p class="kata-gaya" style="font-weight: bold;"> Visi : Terwujudnya masyarakat dan lingkungan yang sehat secara mandiri.</p>
  <style>
    .kata-gaya {     
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
        position: relative;
        bottom: 100px;
     right: 250px;
    }
</style>


<p class="kata-gayaa" style="font-weight: bold;">Misi : a.	Memelihara dan meningkatkan pelayanan kesehatan yang merata, bermutu, dan berkeadilan.</p>
  <style>
    .kata-gayaa {     
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
        position: relative;
        bottom: 100px;
     right: 250px;
    }
</style>

<p class="kata-gayaaa" style="font-weight: bold;">b. Mendorong kemandirian masyarakat untuk berprilaku hidup bersih dan sehat.</p>
  <style>
    .kata-gayaaa {     
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
        position: relative;
        bottom: 100px;
     right: 250px;
    }
</style>

<p class="kata-gayaaaa" style="font-weight: bold;">c. Menggerakkan pembangunan berwawasan kesehatan.</p>
  <style>
    .kata-gayaaaa {     
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
        position: relative;
        bottom: 100px;
     right: 250px;
    }
</style>

<p class="kata-gayaaaaa" style="font-weight: bold;">d.	Meningkatkan kualitas SDM bidang tugasnya.</p>
  <style>
    .kata-gayaaaaa {     
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
        position: relative;
        bottom: 100px;
     right: 250px;
    }
</style>

<body class="hold-transition login-page">
<div class="login-box">


  
  <body>
   
    <img src="{{ asset('images/logo_puskesmas.png') }}" style="position: absolute;
    top: 10px;
    left: 10px;
    width: 100px;">

</body>




  <body style=" background: linear-gradient(45deg, #27ae60, #2980b9);
    background-size: 400% 400%;
    animation: gradientAnimation 15s ease infinite;">
    
    <div class="box-pindah">
<div class="card card-outline card-primary">
<div class="card-header text-center">
<a href="#" class="h4"><b style="color: 	#3CB371"> PUSKESMAS</b> PARSOBURAN</a>
</div>
<div class="card-body">
<p class="login-box-msg">Sign in to start your session</p>
<form action="{{ route('postlogin') }}" method="post">
  {{ csrf_field() }}
<div class="input-group mb-3">
<input type="username" class="form-control" name="username" placeholder="Username">
<div class="input-group-append">
<div class="input-group-text">
<i class="fas fa-user"></i>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" class="form-control" name="password" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>

</div>
</div>
</div>

@if(Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif


<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" id="remember">
<label for="remember">
Remember Me
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Sign In</button>
</div>

</div>

<p class="mb-1">
<a href="forgot-password.html">  Lupa sandi?</a>

</p>
</p>
</div>
</div>

<style>
    .box-pindah {
        position: absolute;
        top: 195px;
        left: 1000px;
    }
</style>

<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('AdminLTE/dist/js/adminlte.min.js?v=3.2.0')}}"></script>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


</body>
</html>

