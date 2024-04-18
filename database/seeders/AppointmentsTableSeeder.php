<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appointments = [
            [

                'doctor_id' => 2,
                'date' => now()->addDays(1)->toDateString(),
                'start_time' => '12:00:00',
                'end_time' => '13:00:00',
                'status' => 'available',
            ],
            [

                'doctor_id' => 2,
                'date' => now()->addDays(2)->toDateString(),
                'start_time' => '15:00:00',
                'end_time' => '16:00:00',
                'status' => 'available',
            ],

        ];


        DB::table('appointments')->insert($appointments);
    }
}
