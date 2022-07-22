<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mapel = [
            ['Kode_MP' => 'MP01', 'NAMA_MP' => 'ALOGRITMA', 'SKS' => '2', 'SEMESTER' => '1'],
            ['Kode_MP' => 'MP02', 'NAMA_MP' => 'BASISDATA', 'SKS' => '3', 'SEMESTER' => '1'],
            ['Kode_MP' => 'MP01', 'NAMA_MP' => 'ASSEMBLY', 'SKS' => '2', 'SEMESTER' => '2'],
        ];
        // masukan data ke database
        DB::table('mapels')->insert($mapel);
    }
}
