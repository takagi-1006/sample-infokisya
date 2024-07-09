<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedules = [
            [ 'Year' => '2024', 'month' => '1', 'day'=> '30', 'time'=> '10'],
        ];

        foreach ($schedules as $schedule) {
            Schedule::create($schedule);
        }
    }
}