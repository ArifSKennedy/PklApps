<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $transaksi = [
            ['no_transaksi' => '2001', 'id_pengunjung' => '10001', 'id_karyawan' => '10201', 'jmlh_kamar' => '5', 'tgl_masuk' =>'2022-7-14', 'tgl_keluar' => '2022-8-22', 'lama_nginap' => '1', 'total_harga' => '5000000'],
            ['no_transaksi' => '2002', 'id_pengunjung' => '10002', 'id_karyawan' => '10202', 'jmlh_kamar' => '3', 'tgl_masuk' =>'2022-7-13', 'tgl_keluar' => '2022-8-20', 'lama_nginap' => '2', 'total_harga' => '2000000'],
            ['no_transaksi' => '2003', 'id_pengunjung' => '10003', 'id_karyawan' => '10203', 'jmlh_kamar' => '2', 'tgl_masuk' =>'2022-7-17', 'tgl_keluar' => '2022-8-21', 'lama_nginap' => '3', 'total_harga' => '1000000'],
            ['no_transaksi' => '2004', 'id_pengunjung' => '10004', 'id_karyawan' => '10204', 'jmlh_kamar' => '1', 'tgl_masuk' =>'2022-7-18', 'tgl_keluar' => '2022-8-18', 'lama_nginap' => '5', 'total_harga' => '3000000'],
            ['no_transaksi' => '2005', 'id_pengunjung' => '10005', 'id_karyawan' => '10205', 'jmlh_kamar' => '2', 'tgl_masuk' =>'2022-7-10', 'tgl_keluar' => '2022-8-25', 'lama_nginap' => '3', 'total_harga' => '1000000'],
            
        ];
        // masukan data ke database
        DB::table('transaksis')->insert($transaksi);
    }
}
