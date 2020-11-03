<?php namespace App\Database\Seeds;

class ModuleSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'modules';

        public function run()
        {
                $data = [
                    [
                        'module_name' => 'user management',
                        'module_description' => 'user management',
                        'module_icon' => '<i class="fas fa-users-cog"></i>',
                        'order' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'module_name' => 'activity log',
                        'module_description' => 'activity log',
                        'module_icon' => '<i class="fas fa-users-cog"></i>',//change font-awesome related to the topic
                        'order' => 2,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'module_name' => 'inventory management',
                        'module_description' => 'inventory management',
                        'module_icon' => '<i class="fas fa-users-cog"></i>',//change font-awesome related to the topic
                        'order' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'module_name' => 'borrower management',
                        'module_description' => 'borrower management',
                        'module_icon' => '<i class="fas fa-users-cog"></i>',//change font-awesome related to the topic
                        'order' => 4,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'module_name' => 'item list',
                        'module_description' => 'item list',
                        'module_icon' => '<i class="fas fa-users-cog"></i>',//change font-awesome related to the topic
                        'order' => 5,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
