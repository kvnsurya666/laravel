<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merk')->insert([
            'kode_merk' => 0,
            'nama_merk' => 'WEIDA',
            'gambar_merk' => 'weida.png'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 1,
            'nama_merk' => 'J&W',
            'gambar_merk' => 'J&W.png'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 2,
            'nama_merk' => 'Fullmark',
            'gambar_merk' => 'fullmark.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 3,
            'nama_merk' => 'DIXON',
            'gambar_merk' => 'dixon.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 4,
            'nama_merk' => 'SAN OU',
            'gambar_merk' => 'sanou.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 5,
            'nama_merk' => 'Mitutoyo',
            'gambar_merk' => 'mitutoyo.png'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 6,
            'nama_merk' => 'Maykestag',
            'gambar_merk' => 'maykestag.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 7,
            'nama_merk' => 'NACHI',
            'gambar_merk' => 'NACHI.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 8,
            'nama_merk' => 'NIKKEN',
            'gambar_merk' => 'NIKKEN.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 9,
            'nama_merk' => 'SEAYAC',
            'gambar_merk' => 'seayac.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 10,
            'nama_merk' => 'SHAN GIN',
            'gambar_merk' => 'SHAN GIN.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 11,
            'nama_merk' => 'Besdia',
            'gambar_merk' => 'Besdia.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 12,
            'nama_merk' => 'Arntz',
            'gambar_merk' => 'Arntz.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 13,
            'nama_merk' => 'ORIENTCRAFT',
            'gambar_merk' => 'ORIENTCRAFT.png'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 14,
            'nama_merk' => 'SUPERSONIC',
            'gambar_merk' => 'SUPERSONIC.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 15,
            'nama_merk' => 'BOSI TOOLS',
            'gambar_merk' => 'bosi tools.png'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 16,
            'nama_merk' => 'CarMard',
            'gambar_merk' => 'Carmar.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 17,
            'nama_merk' => 'VERTEX',
            'gambar_merk' => 'vertex.png'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 18,
            'nama_merk' => 'WAYTRAIN',
            'gambar_merk' => 'waytrain.jpg'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 19,
            'nama_merk' => 'KODEX',
            'gambar_merk' => 'KODEX.png'
        ]);
        DB::table('merk')->insert([
            'kode_merk' => 20,
            'nama_merk' => 'LAMINA',
            'gambar_merk' => 'LAMINA.jpg'
        ]);

    }
}
