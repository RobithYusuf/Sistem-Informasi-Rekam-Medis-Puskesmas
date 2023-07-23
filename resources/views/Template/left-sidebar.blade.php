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
  <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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