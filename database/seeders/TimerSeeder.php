<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('timers')->truncate();
        DB::table('timers')->insert([
            'end_time' => Carbon::now()->addDays(9)->addHours(22)->addMinutes(38)->addSeconds(31)->toDateTimeString(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
