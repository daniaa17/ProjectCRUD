<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Webnovel extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_webnovel'     => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'judul_komik'   => [
				'type'           => 'VARCHAR',
				'constraint'     => "100",
			],
			'genre'         => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'jadwal'        => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'ringkasan'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '500',
			],
			'created_at'    => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at'    => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_webnovel');
		$this->forge->createTable('webnovel');
    }

    public function down()
    {
        $this->forge->dropTable('webnovel');
    }
}
