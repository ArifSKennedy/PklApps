<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailtransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $detailtransaksi = [
            ['id_dtl_transaksi' => '2001', 'no_transaksi' => '7001', 'no_kamar' => '3401'],
            ['id_dtl_transaksi' => '2002', 'no_transaksi' => '7002', 'no_kamar' => '3402'],
            ['id_dtl_transaksi' => '2003', 'no_transaksi' => '7003', 'no_kamar' => '3403'],
            ['id_dtl_transaksi' => '2004', 'no_transaksi' => '7004', 'no_kamar' => '3404'],
            ['id_dtl_transaksi' => '2005', 'no_transaksi' => '7005', 'no_kamar' => '3405'],
            
        ];
        // masukan data ke database
        DB::table('detailtransaksis')->insert($detailtransaksi);
    }
}
