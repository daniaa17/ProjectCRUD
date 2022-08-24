<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class WebnovelSeeder extends Seeder
{
    public function run()
    {
        $data = [
			[
				'nama'          =>  'Fadil',
				'judul_komik'   =>  'Kreator Author',
				'genre'         =>  'Komedi',
				'jadwal'        =>  'Minggu',
				'ringkasan'	    =>  'Ini Ringkasan',
				'created_at'    => Time::now()
			],
			[
				'nama'          =>  'Sulor',
				'judul_komik'   =>  'Silermoon Habis Tenaga',
				'genre'         =>  'Aksi',
				'jadwal'        =>  'Selasa',
				'ringkasan'	    =>  'Ini Ringkasan',
				'created_at'    => Time::now()
			],
			[
				'nama'          =>  'Groom',
				'judul_komik'   =>  'Perahu Kertas',
				'genre'         =>  'Romance',
				'jadwal'        =>  'Sabtu',
				'ringkasan'	    =>  'Ini Ringkasan',
				'created_at'    => Time::now()
			]
		];
		$this->db->table('webnovel')->insertBatch($data);
    }
}
