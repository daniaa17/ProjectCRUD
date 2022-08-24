<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        $data = [
			[
				'nama'          =>  'S.M.S/King Productions',
				'judul_komik'   =>  'Who is Mr. President?',
				'genre'         =>  'Drama',
				'jadwal'        =>  'Minggu',
				'ringkasan'	    =>  'Ini Ringkasan',
				'created_at'    => Time::now()
			],
			[
				'nama'          =>  'Taejoon Park',
				'judul_komik'   =>  'Lookism',
				'genre'         =>  'Aksi',
				'jadwal'        =>  'Jumat',
				'ringkasan'	    =>  'Ini Ringkasan',
				'created_at'    => Time::now()
			],
			[
				'nama'          =>  'Se Jeong',
				'judul_komik'   =>  'Half Ghost',
				'genre'         =>  'Romance',
				'jadwal'        =>  'Minggu',
				'ringkasan'	    =>  'Ini Ringkasan',
				'created_at'    => Time::now()
			]
		];
		$this->db->table('author')->insertBatch($data);
    }
}
