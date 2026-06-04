<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
           'id' => [
            'type' => 'BIGINT',
            'constraint' => 5,
           ],
           'judul' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
           ],
           'penulis' => [
            'type' => 'VARCHAR',
            'constraint' => '50',
           ],
           'penerbit' => [
            'type' => 'VARCHAR',
            'constraint' => '50',
           ],
           'tahun_terbit' => [
            'type' => 'YEAR',
           ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}