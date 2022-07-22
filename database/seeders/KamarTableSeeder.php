<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kamar = [
            ['no_kamar' => '2001', 'jenis_kamar' => 'mini', 'harga' => '100000'],
            ['no_kamar' => '2002', 'jenis_kamar' => 'Delux', 'harga' => '500000'],
            ['no_kamar' => '2003', 'jenis_kamar' => 'Medium', 'harga' => '600000'],
            ['no_kamar' => '2004', 'jenis_kamar' => 'Delux', 'harga' => '700000'],
            ['no_kamar' => '2005', 'jenis_kamar' => 'mini', 'harga' => '800000'],
            
        ];
        // masukan data ke database
        DB::table('kamars')->insert($kamar);
    }
}
