<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sample = [
            ['no' => '2001', 'Kode_MP' => 'MP01'],
            ['no' => '2001', 'Kode_MP' => 'MP02'],
            ['no' => '2003', 'Kode_MP' => 'MP01'],
            ['no' => '2003', 'Kode_MP' => 'MP02'],
            ['no' => '2004', 'Kode_MP' => 'MP01'],
            ['no' => '2004', 'Kode_MP' => 'MP03'],
            
        ];
        // masukan data ke database
        DB::table('pesertas')->insert($sample);
    }
}
