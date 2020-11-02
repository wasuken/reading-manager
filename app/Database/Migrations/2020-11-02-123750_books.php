<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Books extends Migration
{
	public function up()
	{
		//
        $this->forge->addField([
            'book_id' => [
                'type'           => 'INT',
                'constraint'     => 100,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'author_name' => [
                'type' => 'VARCHAR',
                'constraint' => 300,
            ],
        ]);
        $this->forge->addKey('book_id', true);
        $this->forge->createTable('books');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
        $this->forge->dropTable('books');
	}
}
