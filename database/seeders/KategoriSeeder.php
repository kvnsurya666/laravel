<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            'kode_kategori' => 0,
            'nama_kategori' => 'Machinery'
        ]);
        DB::table('kategori')->insert([
            'kode_kategori' => 1,
            'nama_kategori' => 'Machine tool'
        ]);
        DB::table('kategori')->insert([
            'kode_kategori' => 2,
            'nama_kategori' => 'Cutting tool'
        ]);
        DB::table('kategori')->insert([
            'kode_kategori' => 3,
            'nama_kategori' => 'Measuring tool'
        ]);
        DB::table('kategori')->insert([
            'kode_kategori' => 4,
            'nama_kategori' => 'Hand tool'
        ]);
        DB::table('kategori')->insert([
            'kode_kategori' => 5,
            'nama_kategori' => 'Cutting coolant'
        ]);
        DB::table('kategori')->insert([
            'kode_kategori' => 6,
            'nama_kategori' => 'Abrasive'
        ]);
    }
}
