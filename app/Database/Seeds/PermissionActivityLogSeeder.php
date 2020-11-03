<?php namespace App\Database\Seeds;

class PermissionActivityLogSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                       'function_name' => 'show activity details',
                       'function_description' => 'show activity details',
                       'slugs' => 'show-activity',
                       'name_on_class' => 'show_activity',
                       'page_title' => 'activity details',
                       'module_id' => '2',
                        'link_icon' => '',
                       'order' => '116',
                       'table_name' => 'activities',
                       'func_action' => 'show',
                       'func_type' => 3,
                       'allowed_roles' => "[1]",
                       'status' => 'a',
                       'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create activity',
                        'function_description' => 'create activity',
                        'slugs' => 'add-activity',
                        'name_on_class' => 'add_activity',
                        'page_title' => 'create a activity',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '117',
                        'table_name' => 'activities',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of activity',
                        'function_description' => 'list of activity',
                        'slugs' => 'list-activity',
                        'name_on_class' => 'index',
                        'page_title' => 'list of activity',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-chart-line"></i>',
                        'order' => '118',
                        'table_name' => 'activities',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit activity',
                        'function_description' => 'edit activity',
                        'slugs' => 'edit-activity',
                        'name_on_class' => 'edit_activity',
                        'page_title' => 'edit activity',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '119',
                        'table_name' => 'activities',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete activity',
                        'function_description' => 'delete activity',
                        'slugs' => 'delete-activity',
                        'name_on_class' => 'delete_activity',
                        'page_title' => 'delete user account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '120',
                        'table_name' => 'activities',
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
