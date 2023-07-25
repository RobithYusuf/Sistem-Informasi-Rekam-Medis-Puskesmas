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

        $totalPatients = DB::table('datapasien')->count();
        $totalRegistrations = DB::table('datapendaftaran')->count();

        return view('home', compact('visitCount', 'totalPatients', 'totalRegistrations'));
    }
}
