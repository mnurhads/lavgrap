<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alamat;

class AlamatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alamats = [
            [
                'alamat' => 'Jl. Kemerdekaan 12 Berdikari, Kota Semarang',
                'kelurahan' => 'Kalicari',
                'kecamatan'    => 'Pedurungan',
                'kota'	         => 'Kota Semarang',
                'provinsi'         => 'Jawa Tengah',
                'status'             => '1'
            ],
            [
                'alamat' => 'Jl. Superbaru 12 Berdikari, Kota Semarang',
                'kelurahan' => 'Kandas',
                'kecamatan'    => 'Turi Putih',
                'kota'	         => 'Kota Surabaya',
                'provinsi'         => 'Jawa Timur',
                'status'             => '1'
            ],
            [
                'alamat' => 'Jl. Maju Raya 12 Berdikari, Kota Semarang',
                'kelurahan' => 'Kalicari',
                'kecamatan'    => 'Pedurungan',
                'kota'	         => 'Kota Semarang',
                'provinsi'         => 'Jawa Tengah',
                'status'             => '1'
            ],
            [
                'alamat' => 'Jl. Maju Terus 12 Berdikari, Kota Semarang',
                'kelurahan' => 'Kalicari',
                'kecamatan'    => 'Pedurungan',
                'kota'	         => 'Kota Semarang',
                'provinsi'         => 'Jawa Tengah',
                'status'             => '1'
            ],
            [
                'alamat' => 'Jl. Terus Jaya 12 Berdikari, Kota Semarang',
                'kelurahan' => 'Kalicari',
                'kecamatan'    => 'Pedurungan',
                'kota'	         => 'Kota Semarang',
                'provinsi'         => 'Jawa Tengah',
                'status'             => '1'
            ],
            [
                'alamat' => 'Jl. Budi Daya 12 Berdikari, Kota Semarang',
                'kelurahan' => 'Kalicari',
                'kecamatan'    => 'Pedurungan',
                'kota'	         => 'Kota Semarang',
                'provinsi'         => 'Jawa Tengah',
                'status'             => '1'
            ],
            [
                'alamat' => 'Jl. Bere bere 12 Berdikari, Kota Semarang',
                'kelurahan' => 'Kalicari',
                'kecamatan'    => 'Pedurungan',
                'kota'	         => 'Kota Semarang',
                'provinsi'         => 'Jawa Tengah',
                'status'             => '1'
            ],
            [
                'alamat' => 'Jl. Pocong 12 Berdikari, Kota Semarang',
                'kelurahan' => 'Kalicari',
                'kecamatan'    => 'Pedurungan',
                'kota'	         => 'Kota Semarang',
                'provinsi'         => 'Jawa Tengah',
                'status'             => '1'
            ],
            [
                'alamat' => 'Jl. Mbak Kun Kun 12 Berdikari, Kota Semarang',
                'kelurahan' => 'Kalicari',
                'kecamatan'    => 'Pedurungan',
                'kota'	         => 'Kota Semarang',
                'provinsi'         => 'Jawa Tengah',
                'status'             => '1'
            ],
            [
                'alamat' => 'Jl. Gelas Kaca 12 Berdikari, Kota Semarang',
                'kelurahan' => 'Kalicari',
                'kecamatan'    => 'Pedurungan',
                'kota'	         => 'Kota Semarang',
                'provinsi'         => 'Jawa Tengah',
                'status'             => '2'
            ]
        ];

        foreach($alamats as $user) {
            Alamat::create($user);
        }
    }
}
