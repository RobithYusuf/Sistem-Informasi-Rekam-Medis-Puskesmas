<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="home" class="brand-link">
        <img src="{{ asset('images/logo_puskesmas.png') }}" alt="Puskesmas Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-size: 18px;">Puskesmas
            Parsoburan</span>
    </a>
    @include('Template.head')

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth::user()->role == 'dokter')
                <img src="{{ asset('storage/FotoDokter/'.Auth::user()->foto_profil) }}" class="img-circle elevation-2" alt="User Image" style="border-radius: 50%; width: 50px; height: 50px; object-fit: cover;">
                @elseif (Auth::user()->role == 'petugas')
                <img src="{{ asset('storage/FotoPetugas/'.Auth::user()->foto_profil) }}" class="img-circle elevation-2" alt="User Image" style="border-radius: 50%; width: 50px; height: 50px; object-fit: cover;">
                @else
                <img src="{{ asset('images/default_foto_profil.jpeg') }}" class="img-circle elevation-2" alt="Tidak Aada" style="border-radius: 50%; width: 50px; height: 50px; object-fit: cover;">
                @endif
            </div>

            <div class="info pl-3" style="margin-top: -8px;">
                @if(Auth::check())
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                <a href="#" class="d-block">{{ Auth::user()->role }}</a>
                @endif
            </div>
        </div>

        <!--
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item {{ request()->is('home') ? 'menu-open' : '' }}">
                    <a href="{{ url ('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>DASHBOARD</p>
                    </a>
                </li>

                @if (auth()->user()->role == "admin")
                <li class="nav-item has-treeview {{ request()->is('datapetugas-masuk', 'datadokter-masuk', 'datapoli-masuk') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('datapetugas-masuk', 'datadokter-masuk', 'datapoli-masuk') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-file-shield"></i>
                        <p>
                            MASTER DATA
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url ('datapetugas-masuk') }}" class="nav-link {{ request()->is('datapetugas-masuk') ? 'active' : '' }}">

                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Petugas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url ('datadokter-masuk') }}" class="nav-link {{ request()->is('datadokter-masuk') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Dokter</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url ('datapoli-masuk') }}" class="nav-link {{ request()->is('datapoli-masuk') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Poliklinik</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif


                @if (auth()->user()->role == "petugas")
                <li class="nav-item {{ request()->is('editProfileModal') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('editProfileModal') ? 'active' : '' }}" data-toggle="modal" data-target="#editProfileModal">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>EDIT PROFIL</p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ request()->is('datapasien-masuk', 'datapendaftaran-masuk', 'dataKIB-masuk') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            PENDAFTARAN
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url ('datapasien-masuk') }}" class="nav-link {{ request()->is('datapasien-masuk') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url ('datapendaftaran-masuk') }}" class="nav-link {{ request()->is('datapendaftaran-masuk') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pendaftaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url ('dataKIB-masuk') }}" class="nav-link {{ request()->is('dataKIB-masuk') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data KIB</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if (auth()->user()->role == "dokter")
                <li class="nav-item {{ request()->is('editProfileModal') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('editProfileModal') ? 'active' : '' }}" data-toggle="modal" data-target="#editProfileModal">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>EDIT PROFIL</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('datapemeriksaan-masuk') ? 'menu-open' : '' }}">
                    <a href="{{ url ('datapemeriksaan-masuk') }}" class="nav-link {{ request()->is('datapemeriksaan-masuk') ? 'active' : '' }}">


                        <i class="nav-icon fas fa fa-stethoscope"></i>
                        <p>PEMERIKSAAN</p>
                    </a>
                </li>

                <!-- <li class="nav-item {{ request()->is('reseptObat-masuk') ? 'menu-open' : '' }}">
                    <a href="{{ url ('reseptObat-masuk') }}" class="nav-link {{ request()->is('reseptObat-masuk') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Resep Obat</p>
                    </a>
                </li> -->
                <li class="nav-item {{ request()->is('rekammedis-masuk') ? 'menu-open' : '' }}">
                    <a href="{{ url ('rekammedis-masuk') }}" class="nav-link {{ request()->is('rekammedis-masuk') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-notes-medical"></i>
                        <p>REKAM MEDIS</p>
                    </a>
                </li>
                @endif




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
