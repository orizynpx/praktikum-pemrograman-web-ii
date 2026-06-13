<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
           'id' => [
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => true,
            'auto_increment' => true,
           ],
           'username' => [
            'type' => 'VARCHAR',
            'constraint' => 25, 
           ],
           'email' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
           ],
           'password' => [
            'type' => 'TEXT',
            'constraint' => 50,
           ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}