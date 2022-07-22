<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
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
            ['no' => '2001', 'nama' => 'Badu', 'jk' =>'L', 'jurusan' =>'TK'],
            ['no' => '2002', 'nama' => 'Muliati', 'jk' =>'P', 'jurusan' =>'TE'],
            ['no' => '2001', 'nama' => 'Rahmiadi', 'jk' =>'L', 'jurusan' =>'TK'],
            ['no' => '2001', 'nama' => 'Nasrol', 'jk' =>'L', 'jurusan' =>'TK'],
            
        ];
        // masukan data ke database
        DB::table('siswas')->insert($sample);


    }
}
