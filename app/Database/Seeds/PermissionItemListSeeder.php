<?php namespace App\Database\Seeds;

class PermissionItemListSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                       'function_name' => 'show item details',
                       'function_description' => 'show item details',
                       'slugs' => 'show-item',
                       'name_on_class' => 'show_item',
                       'page_title' => 'item details',
                       'module_id' => '5',
                        'link_icon' => '',
                       'order' => '121',
                       'table_name' => 'items',
                       'func_action' => 'show',
                       'func_type' => 3,
                       'allowed_roles' => "[1]",
                       'status' => 'a',
                       'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create item',
                        'function_description' => 'create item',
                        'slugs' => 'add-item',
                        'name_on_class' => 'add_item',
                        'page_title' => 'create a item',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '122',
                        'table_name' => 'items',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of items',
                        'function_description' => 'list of items',
                        'slugs' => 'list-item',
                        'name_on_class' => 'index',
                        'page_title' => 'list of item',
                        'module_id' => '5',
                        'link_icon' => '<i class="fas fa-box"></i>',
                        'order' => '123',
                        'table_name' => 'items',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit item',
                        'function_description' => 'edit item',
                        'slugs' => 'edit-item',
                        'name_on_class' => 'edit_item',
                        'page_title' => 'edit item',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '124',
                        'table_name' => 'items',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete item',
                        'function_description' => 'delete item',
                        'slugs' => 'delete-item',
                        'name_on_class' => 'delete_item',
                        'page_title' => 'delete user account',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '125',
                        'table_name' => 'items',
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
