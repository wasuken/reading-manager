<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Readings extends Migration
{
	public function up()
	{
		//
        $this->forge->addField([
            'reading_id' => [
                'type'           => 'INT',
                'constraint'     => 100,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
        ]);
        $this->forge->addKey('reading_id', true);
        $this->forge->createTable('readings');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
        $this->forge->dropTable('readings');
	}
}
