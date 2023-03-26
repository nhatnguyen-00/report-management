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
                'key1' => 0,
                'key2' => 0,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(2),
            'data' => [
                'key1' => 15,
                'key2' => 25,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(3),
            'data' => [
                'key1' => 20,
                'key2' => 10,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(4),
            'data' => [
                'key1' => 25,
                'key2' => 20,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(5),
            'data' => [
                'key1' => 15,
                'key2' => 10,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(6),
            'data' => [
                'key1' => 5,
                'key2' => 10,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(7),
            'data' => [
                'key1' => 35,
                'key2' => 20,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(8),
            'data' => [
                'key1' => 15,
                'key2' => 25,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(9),
            'data' => [
                'key1' => 25,
                'key2' => 5,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(10),
            'data' => [
                'key1' => 15,
                'key2' => 10,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(11),
            'data' => [
                'key1' => 30,
                'key2' => 20,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(12),
            'data' => [
                'key1' => 15,
                'key2' => 10,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(13),
            'data' => [
                'key1' => 15,
                'key2' => 30,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(14),
            'data' => [
                'key1' => 35,
                'key2' => 10,
            ],
        ]);

        Report::create([
            'date' => Carbon::now()->subDays(15),
            'data' => [
                'key1' => 25,
                'key2' => 20,
            ],
        ]);
    }
}
