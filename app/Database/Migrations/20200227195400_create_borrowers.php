<?php namespace App\Database\Migrations;

class CreateBorrowers extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'borrowed_by'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '20'
                        ],

                        'approved_by'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '20'
                        ],

                        'approved_date'          => [
                                'type'           => 'DATETIME'
                        ],

                        'date_borrowed'          => [
                              'type'           => 'DATETIME'
                        ],

                        'date_return'          => [
                                'type'           => 'DATETIME'
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
                $this->forge->createTable('borrowers');
        }

        public function down()
        {
                $this->forge->dropTable('borrowers');
        }
}
