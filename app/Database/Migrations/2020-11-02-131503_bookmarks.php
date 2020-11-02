<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bookmarks extends Migration
{
	public function up()
	{
		//
        $this->forge->addField([
            'bookmark_id' => [
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
            'page' => [
                'type' => 'INT',
                'constraint'     => 100,
            ],
        ]);
        $this->forge->addKey('bookmark_id', true);
        $this->forge->createTable('bookmarks');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
        $this->forge->dropTable('bookmarks');
	}
}
