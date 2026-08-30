<?php
namespace App\Database\Migrations;
 
use CodeIgniter\Database\Migration;
 
class CreateProdukTable extends Migration
{
    public function up()
    {
        $this->db->query('CREATE SCHEMA IF NOT EXISTS inventory');

        $this->forge->addField([
            'id' => [
                'type'           => 'BIGSERIAL',
            ],
            'nama_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'stok' => [ 
                'type'    => 'INT',
                'default' => 0,
            ],
            'created_at' => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
 
        $this->forge->createTable('inventory.produk');
    }
 
    public function down()
    {
        $this->forge->dropTable('inventory.produk');
    }
}