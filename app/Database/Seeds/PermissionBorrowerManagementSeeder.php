<?php namespace App\Database\Seeds;

class PermissionBorrowerManagementSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                       'function_name' => 'show borrower details',
                       'function_description' => 'show borrower details',
                       'slugs' => 'show-borrower',
                       'name_on_class' => 'show_borrower',
                       'page_title' => 'borrower details',
                       'module_id' => '3',
                        'link_icon' => '',
                       'order' => '111',
                       'table_name' => 'borrowers',
                       'func_action' => 'show',
                       'func_type' => 3,
                       'allowed_roles' => "[1]",
                       'status' => 'a',
                       'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create borrower',
                        'function_description' => 'create borrower',
                        'slugs' => 'add-borrower',
                        'name_on_class' => 'add_borrower',
                        'page_title' => 'create a borrower',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '112',
                        'table_name' => 'borrowers',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of borrowers',
                        'function_description' => 'list of borrowers',
                        'slugs' => 'list-borrower',
                        'name_on_class' => 'index',
                        'page_title' => 'list of borrower',
                        'module_id' => '3',
                        'link_icon' => '<i class="fas fa-people-carry"></i>',
                        'order' => '113',
                        'table_name' => 'borrowers',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit borrower',
                        'function_description' => 'edit borrower',
                        'slugs' => 'edit-borrower',
                        'name_on_class' => 'edit_borrower',
                        'page_title' => 'edit borrower',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '114',
                        'table_name' => 'borrowers',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete borrower',
                        'function_description' => 'delete borrower',
                        'slugs' => 'delete-borrower',
                        'name_on_class' => 'delete_borrower',
                        'page_title' => 'delete borrower',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '115',
                        'table_name' => 'borrowers',
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
