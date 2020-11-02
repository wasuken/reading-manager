<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Memos extends Migration
{
	public function up()
	{
		//
        $this->forge->addField([
            'memo_id' => [
                'type'           => 'INT',
                'constraint'     => 100,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'reading_id' => [
                'type'           => 'INT',
                'constraint'     => 100,
                'unsigned'       => true,
            ],
            'content' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'page' => [
                'type' => 'INT',
                'constraint'     => 100,
            ],
        ]);
        $this->forge->addKey('memo_id', true);
        $this->forge->createTable('memos');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
        $this->forge->dropTable('memos');
	}
}
