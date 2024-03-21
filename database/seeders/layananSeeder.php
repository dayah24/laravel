<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class layananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        //
        DB::table('layanan')->insert([
            'kode_layanan'=>'001',
            'nama_layanan'=>'potong rambut shaggy',
            'deskripsi'=>'potong rambut',
            'biaya_layanan'=>'15000',
            'durasi_layanan'=>'30 menit',
            'kategori_layanan'=>'perawatan rambut',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
