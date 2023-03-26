<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $reports = Report::where('date', '<=', Carbon::now())
            ->groupBy('date')
            ->get();
        
        dd($reports);
    }
}
