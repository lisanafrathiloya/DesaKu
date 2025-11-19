<?php

namespace App\Http\Controllers;

use App\Models\Resident;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard', [
            // Gender
            'total' => Resident::count(),
            'laki' => Resident::where('gender', 'male')->count(),
            'perempuan' => Resident::where('gender', 'female')->count(),

            // Status Keaktifan
            'aktif' => Resident::where('status', 'active')->count(),
            'pindah' => Resident::where('status', 'moved')->count(),
            'meninggal' => Resident::where('status', 'deceased')->count(),

            // Status Perkawinan (Fix mapping)
            'single' => Resident::where('marital_status', 'single')->count(),
            'married' => Resident::where('marital_status', 'maried')->count(),
            'widowed' => Resident::where('marital_status', 'widowed')->count(),
            'divorced' => Resident::where('marital_status', 'divorced')->count()
        ]);
    }
}
