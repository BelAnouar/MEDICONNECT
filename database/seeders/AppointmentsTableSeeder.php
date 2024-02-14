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

                'doctor_id' => 1,
                'appointment_time' => Carbon::now()->addDays(3), // Example: Set appointment time 3 days from now
                'cancel_appointment' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more appointments as needed
        ];

        // Insert data into the appointments table
        DB::table('appointments')->insert($appointments);
    }
}
