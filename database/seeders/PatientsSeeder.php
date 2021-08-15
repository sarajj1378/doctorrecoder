<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Patients')->insert([
            'first_name'=>'Sara',
            'last_name'=>'Jalali',
            'national_code'=>'4984338943290',
            'birthday'=>new DateTime(),
            'location'=>'kerman',
            'gender'=> true,
            'pregnancy_status'=>false,
            'phone_number'=>'09135324733',
        ]);
    }
}
