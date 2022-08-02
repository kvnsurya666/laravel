<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('model')->insert([
            'kode_model' => 0,
            'nama_model' => 'Mesin Bubut Manual'
        ]);
        DB::table('model')->insert([
            'kode_model' => 1,
            'nama_model' => 'Mesin Bubut CNC'
        ]);
        DB::table('model')->insert([
            'kode_model' => 2,
            'nama_model' => 'Mesin Miling Manual'
        ]);
        DB::table('model')->insert([
            'kode_model' => 3,
            'nama_model' => 'Mesin Miling CNC'
        ]);
        
    }
}
