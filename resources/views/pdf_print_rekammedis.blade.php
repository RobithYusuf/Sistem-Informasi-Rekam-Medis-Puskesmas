<!DOCTYPE html>
<html>

<head>
    <title>Laporan Medis</title>
    <style>
        /* Your styles here */
        .header table {
            width: 100%;
            border: none;
        }

        .patient-info table {
            width: 100%;
            border: none;
        }

        .patient-info td:first-child {
            width: 33.33%;
        }

        .patient-info td:last-child {
            width: 66.67%;
        }

        .medical-record-table {
            width: 100%;
            border-collapse: collapse;
        }

        .medical-record-table th,
        .medical-record-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .medical-record-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Change the color of the table headers and the even rows */
        .medical-record-table th {
            background-color: #0B6623;
            /* Pale Green */
            color: white;
        }

        .medical-record-table tr {
            background-color: #FFFFFF;
            /* White */
        }
    </style>
</head>


<body>

    <div class="header">
        <table style="width: 100%; border: none;">
            <tr>
                <td style="width: 15%; text-align: left;">
                    <img src="{{ public_path() . '/Pematangsiantar.jpeg' }}" alt="Logo Pematangsiantar" style="width:75px; height:75px;">
                </td>
                <td style="width: 70%; text-align: center;">
                    <div class="title">
                        <span class="logo-title">PEMERINTAHAN KOTA PEMATANGSIANTAR</span><br>
                        <span class="logo-subtitle">PUSKESMAS PARSOBURAN</span><br>
                        <span class="logo-subtitle">JLN. PARSOBURAN NO.22 PEMATANG SIANTAR</span>
                    </div>
                </td>
                <td style="width: 15%; text-align: right;">
                    <img src="{{ public_path() . '/LogoPuskesmas.jpeg' }}" alt="Logo Puskesmas" style="width:75px; height:75px;">
                </td>
            </tr>
        </table>
        <hr style="border-top: 3px solid #000000;">
    </div>
    <div style="text-align: center;">
        <h2>Laporan Rekam Medis Pasien</h2>
    </div>
    <div class="patient-info">
        <table>
            <tr>
                <td>No. Rekam Medis</td>
                <td>: {{ $data->first()->no_rm }}</td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>: {{ $data->first()->nama_pasien }}</td>
            </tr>

            <tr>
                <td>Agama</td>
                <td>: {{ $data->first()->agama }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: {{ $data->first()->status == 'bpjs' ? 'BPJS' : 'Umum' }}</td>
            </tr>
            @if($data->first()->status == 'bpjs')
            <tr>
                <td>No BPJS</td>
                <td>: {{ $data->first()->no_bpjs }}</td>
            </tr>
            @endif
        </table>
    </div>
    <br><br>

    <table class="medical-record-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Poliklinik</th>
                <th>Diagnosis</th>
                <th>Riwayat Alergi</th>
                <th>Hasil Pemeriksaan</th>
                <th>Tanggal Pemeriksaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->poliklinik }}</td>
                <td>{{ $row->diagnosis }}</td>
                <td>{{ $row->riwayat_alergi }}</td>
                <td>{{ $row->hasil_pemeriksaan }}</td>
                <td>{{ $row->tgl_pemeriksaan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
