<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $karyawan = [
            ['id_karyawan' => '2001', 'nm_karyawan' => 'Arif', 'JK' => 'Pria'],
            ['id_karyawan' => '2002', 'nm_karyawan' => 'Dobleh', 'JK' => 'Pria'],
            ['id_karyawan' => '2003', 'nm_karyawan' => 'Rimuru', 'JK' => 'Wanita'],
            ['id_karyawan' => '2004', 'nm_karyawan' => 'Aceng', 'JK' => 'Pria'],
            ['id_karyawan' => '2005', 'nm_karyawan' => 'Dinar', 'JK' => 'Wanita'],
            
        ];
        // masukan data ke database
        DB::table('karyawans')->insert($karyawan);
    }
}
