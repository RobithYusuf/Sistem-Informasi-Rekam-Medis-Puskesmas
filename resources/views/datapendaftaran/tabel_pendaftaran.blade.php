@extends('index_tabel')
@section('judul','Pendaftaran')
@section('back_tabel','/datapendaftaran-masuk')
@section('before_judul_tabel','Data Pendaftaran')
@section('judul_tabel','Tabel Pendaftaran')
@section('content')
<div class="content">
    <div class="container-fluid">
        <section class="content">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Data Pendaftaran</h3>
                    <div class="card-tools">
                    <a href="{{ route('tambahpendaftaran') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                    <select id="statusFilter" class="custom-select" style="width: auto;">
                        <option value="">Semua Status</option>
                        <option value="Menunggu">Menunggu</option>
                        <option value="Berhasil">Berhasil</option>
                    </select>
                </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive" style="overflow-x: auto;">
                        <table class="table table-bordered responsive-table" id="example">
                            <link rel="stylesheet" href="css/style.css">
                            <thead>
                                <tr>
                                    <th style="width: 100px">No</th>

                                    <th style="width: 100px">Pelayanan</th>
                                    <th style="width: 100px">Nama Pasien</th>
                                    <th style="width: 100px">Poliklinik</th>
                                    <th style="width: 100px">Jenis Kelamin</th>
                                    <th style="width: 100px">Riwayat Alergi</th>
                                    <th style="width: 100px">Nomor Registrasi</th>
                                    <th style="width: 100px">Status</th>
                                    <th style="width: 80px">Nomor BPJS</th>
                                    <th style="width: 80px">Status Pendaftaran</th>
                                    <th style="width: 80px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtpendaftaran as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->pelayanan }}</td>
                                    <td>{{ $item->pasien->nama_pasien }}</td>
                                    <td>{{ $item->poliklinik->nama_poli }}</td>
                                    <td>{{ $item->pasien->jenis_kelamin }}</td>
                                    <td>{{ $item->riwayat_alergi }}</td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->no_bpjs }}</td>
                                    <td>{{ $item->status_pendaftaran }}</td>
                                    <td>
                                        <a href="{{ url('editpendaftaran', $item->id) }}"><i class="fa-solid fa-wand-magic-sparkles"></i></a>
                                        <a href="{{ url('deletependaftaran', $item->id) }}"><i class="fa-solid fa-person-circle-minus" style="color: red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
        </section>
    </div>
</div>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable();

        $('#statusFilter').change(function() {
            table.column(9).search($(this).val()).draw();
        });
    });
</script>

@endsection
