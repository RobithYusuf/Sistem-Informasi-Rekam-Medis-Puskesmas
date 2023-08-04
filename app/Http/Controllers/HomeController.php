<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $currentMonth = Carbon::now()->month;

        $visitCount = DB::table('datapendaftaran')
            ->whereMonth('created_at', $currentMonth)
            ->count();
        $patientsBelumPeriksa = DB::table('pemeriksaan')
            ->where('status', 'belum diperiksa')
            ->count();


        $totalPatients = DB::table('datapasien')->count();
        $totalRegistrations = DB::table('datapendaftaran')->count();

        return view('dashboard.dashboard', compact('patientsBelumPeriksa', 'visitCount', 'totalPatients', 'totalRegistrations'));
    }
    // Di HomeController.php
    public function getVisitData()
    {
        $visitCounts = DB::table('datapendaftaran')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('count(*) as count'))
            ->groupBy('month')
            ->pluck('count', 'month');

        return response()->json($visitCounts);
    }

    public function getGenderData()
    {
        $genderCounts = DB::table('datapasien')
            ->select(DB::raw('MONTH(created_at) as month'), 'jenis_kelamin', DB::raw('count(*) as count'))
            ->groupBy('month', 'jenis_kelamin')
            ->get()
            ->groupBy('month')
            ->map(function ($item) {
                return $item->pluck('count', 'jenis_kelamin');
            });

        return response()->json($genderCounts);
    }
}
