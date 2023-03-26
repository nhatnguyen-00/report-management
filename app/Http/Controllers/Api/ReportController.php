<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $reports = Report::whereBetween('date', [Carbon::now()->subDays(14), Carbon::now()])
            ->groupBy('date')
            ->get();

        return response()->json([
            'reports' => $reports,
        ]);
    }
}
