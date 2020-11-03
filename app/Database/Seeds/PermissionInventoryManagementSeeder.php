<?php namespace App\Database\Seeds;

class PermissionInventoryManagementSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                       'function_name' => 'show inventory details',
                       'function_description' => 'show inventory details',
                       'slugs' => 'show-inventory',
                       'name_on_class' => 'show_inventory',
                       'page_title' => 'inventory details',
                       'module_id' => '3',
                        'link_icon' => '',
                       'order' => '106',
                       'table_name' => 'inventories',
                       'func_action' => 'show',
                       'func_type' => 3,
                       'allowed_roles' => "[1]",
                       'status' => 'a',
                       'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create inventory',
                        'function_description' => 'create inventory',
                        'slugs' => 'add-inventory',
                        'name_on_class' => 'add_inventory',
                        'page_title' => 'create a inventory',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '107',
                        'table_name' => 'inventories',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of item borrowed',
                        'function_description' => 'list of item borrowed',
                        'slugs' => 'list-inventory',
                        'name_on_class' => 'index',
                        'page_title' => 'list of inventory',
                        'module_id' => '3',
                        'link_icon' => '<i class="fas fa-box"></i>',
                        'order' => '108',
                        'table_name' => 'inventories',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit inventory',
                        'function_description' => 'edit inventory',
                        'slugs' => 'edit-inventory',
                        'name_on_class' => 'edit_inventory',
                        'page_title' => 'edit inventory',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '109',
                        'table_name' => 'inventories',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete inventory',
                        'function_description' => 'delete inventory',
                        'slugs' => 'delete-inventory',
                        'name_on_class' => 'delete_inventory',
                        'page_title' => 'delete user account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '110',
                        'table_name' => 'inventories',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                //print_r($data); die();
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
