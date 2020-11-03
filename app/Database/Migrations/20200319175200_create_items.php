<?php namespace App\Database\Migrations;

class CreateItems extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'item_code'       => [
                          'type'           => 'VARCHAR',
                          'constraint'     => '50',

                        ],

                        'item_category_code' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'brand_name' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'property_no'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],

                        'description'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],

                        'location'       => [
                          'type'           => 'VARCHAR',
                          'constraint'     => '50',

                        ],

                        'quantity'       => [
                                'type'           => 'INT',
                                'constraint'     => '11',
                        ],

                        'unit_on_stocks'       => [
                              'type'           => 'INT',
                              'constraint'     => '11',
                        ],

                        'status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'a'
                        ],

                        'created_at' => [
                                'type'           => 'DATETIME',
                                'comment'        => 'Date of creation',
                        ],

                        'updated_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date last updated',
                        ],
                        'deleted_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date of soft deletion',
                        ]
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('items');
        }

        public function down()
        {
                $this->forge->dropTable('items');
        }
}
