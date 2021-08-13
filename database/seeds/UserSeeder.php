<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'name'=>'Sara ',
            'medicalcode'=>'123456789',
            'password'=>Hash::make('123456789'),
            'lastname'=>'Jalali',
            'address'=>'rafsanjan',
            'gender'=>true,
            'nationalcode'=>'3040499637',
            'phonenumber'=>'09135324733',
            'takhasos'=>'ghalb',
            'birthday'=>new DateTime(),
        ]);
    }
}
