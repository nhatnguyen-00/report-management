<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;
use Carbon\Carbon;

class ReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Report::truncate();
        Report::create([
            'date' => Carbon::now()->subDays(1),
            'data' => [
                'key1' => 'value1',
                'key2' => 'value2',
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(2),
            'data' => [
                'key1' => 'value1',
                'key2' => 'value2',
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(3),
            'data' => [
                'key1' => 'value1',
                'key2' => 'value2',
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(4),
            'data' => [
                'key1' => 'value1',
                'key2' => 'value2',
            ],
        ]);
    }
}
