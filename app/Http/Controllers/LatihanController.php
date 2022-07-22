<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function menu(){
        $menu = [
           [
             'nama' => 'Beranda',  
           ],
           [
             'nama' => 'Berita',
             'kategori' => [
                [
                   'nama_kategori' => 'Olah Raga',
                   'menu' => [
                      'Sepak Bola',
                      'Bulu Tangkis'
                   ]

                ],
                [
                    'nama_kategori' => 'Politik'
                ],
                [
                    'nama_kategori' => 'Manca Negara'
                ]
             ]
           ],
           [
            'nama' => 'Tentang'
           ]




        ];
        //dd($data);
        return view('pages.menu', ['menu' => $menu]);

   
    }
    public function dosen(){
        $dosen = [
        [
            'nama' => 'Yusuf bacthiar','mata_kuliah' => 'Pemrograman Mobile','mahasiswa' => [
                ['nama' => 'Muhammad Soleh','nilai' => 78],
                ['nama' => 'Jujun Junaedi','nilai' => 85],
                ['nama' => 'Mamat Alkatiri','nilai' => 90],
                ['nama' => 'Ubay Holin','nilai' => 87],
                ['nama' => 'Fadillah','nilai' => 95],
            ]
        ],
        [
            'nama' => 'Yaris','mata_kuliah' => 'Pemrograman Web','mahasiswa' => [
                ['nama' => 'Affeed McTomminay','nilai' => 67],
                ['nama' => 'Bruno Kasmir','nilai' => 90],
                ['nama' => 'akid hendra','nilai' => 50],
                ['nama' => 'Dany Irawan','nilai' => 70],
                ['nama' => 'chandra mega putra','nilai' => 60],
            ]
        ]
    ]; 

    return view('pages.dosen', ['dosen' => $dosen]);
     }   
     
    public function televisi(){
        $televisi = [
            [
            'nama' => 'NET TV',
            'jadwaltayang' => [
                ['program' => 'Seputar Olahraga', 
                'jam' => '18.00 WIB',
                'tanggal' => '20 juni 2021', 
                ],
                ['program' => 'Berita terkini', 
                'jam' => '19.00 WIB',
                'tanggal' => '20 juni 2021', 
                ],
                ['program' => 'Berita Persib', 
                'jam' => '19.50 WIB',
                'tanggal' => '20 juni 2021', 
                ]
            ] 
            ],

            [
            'nama' => 'TVRI','jadwaltayang' => [
                ['program' => 'Seputar Politik', 
                'jam' => '19.00 WIB',
                'tanggal' => '24 juni 2021', 
                ],
                ['program' => 'Seputar Olimpiade', 
                'jam' => '19.00 WIB',
                'tanggal' => '24 juni 2021', 
                ],
                ['program' => 'Seputar Kita', 
                'jam' => '19.00 WIB',
                'tanggal' => '24 juni 2021', 
                ]
            ]
            ],
            [
            'nama' => 'BEINSPORT','jadwaltayang' => [
                ['program' => 'Seputar Olahraga dan Atlet', 
                'jam' => '18.30 WIB',
                'tanggal' => '4 juni 2021',
                ],
                ['program' => 'Seputar Olahraga dan Kejuaraan', 
                'jam' => '18.30 WIB',
                'tanggal' => '4 juni 2021',
                ],
                ['program' => 'Seputar Olahraga dan Terkini', 
                'jam' => '18.30 WIB',
                'tanggal' => '4 juni 2021',
                ] 
            ]
            ],
            [
            'nama' => 'Ochannel','jadwaltayang' => [
                ['program' => 'Seputar Gaming', 
                'jam' => '12.00 WIB',
                'tanggal' => '9 juni 2021', 
                ],
                ['program' => 'Seputar', 
                'jam' => '18.30 WIB',
                'tanggal' => '4 juni 2021',
                ],
                ['program' => 'Seputar Anime', 
                'jam' => '18.30 WIB',
                'tanggal' => '4 juni 2021',
                ]


            ]
            ],
            [
            'nama' => 'Indosiar','jadwaltayang' => [
                ['program' => 'Seputar Saya', 
                'jam' => '17.50 WIB',
                'tanggal' => '1 juni 2021', 
                ],
                ['program' => 'Seputar PDI', 
                'jam' => '18.30 WIB',
                'tanggal' => '4 juni 2021',
                ], 
                ['program' => 'Seputar Ahok', 
                'jam' => '18.30 WIB',
                'tanggal' => '4 juni 2021',
                ]
            ]
            ]
            
        ];

        return view('pages.televisi', ['televisi' => $televisi]);
    }

     





}
