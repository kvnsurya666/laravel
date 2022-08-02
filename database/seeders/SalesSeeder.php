<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'nama' => 'Edi',
            'alamat' => 'Surabaya',
            'tgl_lahir' => '1980-12-22',
        ]);
        DB::table('sales')->insert([
            'nama' => 'Ilyas',
            'alamat' => "Surabaya",
            'tgl_lahir' => '1976-01-30',
        ]);
        DB::table('sales')->insert([
            'nama' => 'Rochman',
            'alamat' => "Surabaya",
            'tgl_lahir' => '1977-01-01',
        ]);
        DB::table('sales')->insert([
            'nama' => 'Dwiono',
            'alamat' => "Surabaya",
            'tgl_lahir' => '1970-04-29',
        ]);
    }
}
