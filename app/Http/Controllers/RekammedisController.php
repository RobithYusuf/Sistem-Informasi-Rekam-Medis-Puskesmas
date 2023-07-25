<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Models\datapasien;
use App\Models\rekammedis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekammedisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataRekammedis = DB::select("
        SELECT
            dp.no_rm,
            dp.nama_pasien,
            dpol.nama_poli as 'poliklinik',
            dp.agama,
            dp.alamat,
            da.status,
            IF(da.status = 'bpjs', da.no_bpjs, 'non bpjs') as 'no_bpjs',
            pe.diagnosis,
            da.riwayat_alergi,
            pe.hasil_pemeriksaan
        FROM
            rekam_medis rm
        INNER JOIN
            pemeriksaan pe ON rm.pemeriksaan_id = pe.id
        INNER JOIN
            datapendaftaran da ON pe.pendaftaran_id = da.id
        INNER JOIN
            datapasien dp ON da.pasien_id = dp.id
        INNER JOIN
            datapoli dpol ON da.datapoli_id = dpol.id
    ");

        return view('rekammedis.masuk', compact('dataRekammedis'));
    }

    public function searchAndPrint(Request $request)
    {
        $no_rm = 'RM-' . $request->get('search');
        $pasien = Datapasien::where('no_rm', $no_rm)->first();

        if (!$pasien) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        // Search the database using the provided keyword
        $data = DB::table('datapasien')
            ->distinct()
            ->join('datapendaftaran', 'datapasien.id', '=', 'datapendaftaran.pasien_id')
            ->join('datapoli', 'datapendaftaran.datapoli_id', '=', 'datapoli.id')
            ->join('pemeriksaan', 'datapendaftaran.id', '=', 'pemeriksaan.pendaftaran_id')
            ->select(
                'datapasien.no_rm',
                'datapasien.nama_pasien',
                'datapoli.nama_poli as poliklinik',
                'datapasien.agama',
                'datapasien.alamat',
                'datapendaftaran.status',
                DB::raw("IF(datapendaftaran.status = 'bpjs', datapendaftaran.no_bpjs, 'non bpjs') as no_bpjs"),
                'pemeriksaan.diagnosis',
                'datapendaftaran.riwayat_alergi',
                'pemeriksaan.hasil_pemeriksaan'
            )
            ->where('datapasien.nama_pasien', 'like', "%{$no_rm}%")
            ->orWhere('datapasien.no_rm', 'like', "%{$no_rm}%")
            ->get();

        // If the request is AJAX, return the data as JSON
        if ($request->ajax()) {
            return response()->json($data);
        }

        // If it's not an AJAX request, generate the PDF
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('pdf_print_rekammedis', compact('data'));

        // Return the PDF as a response
        return $pdf->stream('document.pdf');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rekammedis  $rekammedis
     * @return \Illuminate\Http\Response
     */
    public function show(Rekammedis $rekammedis)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rekammedis  $rekammedis
     * @return \Illuminate\Http\Response
     */
    public function edit(rekammedis $rekammedis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rekammedis  $rekammedis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rekammedis $rekammedis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rekammedis  $rekammedis
     * @return \Illuminate\Http\Response
     */
    public function destroy(rekammedis $rekammedis)
    {
        //
    }
}
