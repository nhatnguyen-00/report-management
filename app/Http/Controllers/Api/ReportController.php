<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function index()
    {
        $limitDays = 14;
        $reports = Report::whereBetween('date', [Carbon::now()->subDays($limitDays + 1), Carbon::now()])
            ->get();

        $labels = [];
        $valuesFirst = [];
        $valuesSecond = [];
        foreach ($reports as $report) {
            array_push($labels, $report->date);
            array_push($valuesFirst, $report['data']['key1']);
            array_push($valuesSecond, $report['data']['key2']);
        }

        return response()->json([
            'labels' => $labels,
            'valuesFirst' => $valuesFirst,
            'valuesSecond' => $valuesSecond,
        ]);
    }
}
