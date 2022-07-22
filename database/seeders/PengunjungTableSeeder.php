<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengunjungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pengunjung = [
  ['id_pengunjung' => '2001', 'nm_pengunjung' => 'Arif', 'Alamat' => 'Babakan', 'JK' => 'Pria', 'no_tlp' => '0870000001', 'no_ktp' => '10001'],
  ['id_pengunjung' => '2002', 'nm_pengunjung' => 'Umri', 'Alamat' => 'Sayati', 'JK' => 'Pria', 'no_tlp' => '0870000002', 'no_ktp' => '10002'],
  ['id_pengunjung' => '2003', 'nm_pengunjung' => 'Aldi', 'Alamat' => 'Katapang', 'JK' => 'Pria', 'no_tlp' => '0870000003', 'no_ktp' => '10003'],       
  ['id_pengunjung' => '2004', 'nm_pengunjung' => 'Anissa', 'Alamat' => 'Wasington', 'JK' => 'Wanita', 'no_tlp' => '0870000004', 'no_ktp' => '10004'], 
  ['id_pengunjung' => '2005', 'nm_pengunjung' => 'Anis', 'Alamat' => 'Babakan', 'JK' => 'Pria', 'no_tlp' => '0870000005', 'no_ktp' => '10005'],
  
  

        ];
        // masukan data ke database
        DB::table('pengunjungs')->insert($pengunjung);
    }
}
