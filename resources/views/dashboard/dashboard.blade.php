@extends('home')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            @if (auth()->user()->role != "petugas")
            <div class="col-md-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $visitCount }}</h3>
                        <p>Kunjungan / Bulan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $totalPatients }}</h3>
                        <p>Jumlah Pasien</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endif
            @if (auth()->user()->role == "petugas")
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $visitCount }}</h3>
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
                        <h3>{{ $totalPatients }}</h3>
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
                        <h3>{{ $patientsBelumPeriksa }}</h3>
                        <p>Pasien Belum Diperiksa</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Laporan Chart</h3>
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
                        <div class="row">
                            <div class="col-md-6">
                                <canvas id="kunjunganChart" style=" max-width: 100%;"></canvas>
                            </div>
                            <div class="col-md-6">
                                <canvas id="pasienChart" style=" max-width: 100%;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var visitChart = new Chart($('#kunjunganChart'), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Total Kunjungan Pasien',
                data: Array(12).fill(0),
                backgroundColor: 'rgba(0, 131, 255, 0.8)',
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        precision: 0 // Hanya menampilkan angka bulat di sumbu y
                    }
                }
            }
        }
    });

    // dan begitu juga dengan chart lainnya...


    $.get('/get-visit-data', function(response) {
        Object.keys(response).forEach(month => {
            visitChart.data.datasets[0].data[month - 1] = response[month];
        });
        visitChart.update();
    });

    var genderChart = new Chart($('#pasienChart'), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Pasien Laki-laki',
                data: Array(12).fill(0),
                backgroundColor: 'rgba(60,141,188,0.9)',
            }, {
                label: 'Pasien Perempuan',
                data: Array(12).fill(0),
                backgroundColor: 'rgba(245, 40, 145, 0.8)',
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        precision: 0 // Hanya menampilkan angka bulat di sumbu y
                    }
                }
            }
        }
    });
    $.get('/get-gender-data', function(response) {
        Object.keys(response).forEach(month => {
            if (response[month]['laki-laki']) {
                genderChart.data.datasets[0].data[month - 1] = response[month]['laki-laki'];
            }
            if (response[month]['perempuan']) {
                genderChart.data.datasets[1].data[month - 1] = response[month]['perempuan'];
            }
        });
        genderChart.update();
    });
</script>
@endsection