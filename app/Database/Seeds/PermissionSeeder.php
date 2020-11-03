<?php namespace App\Database\Seeds;

class PermissionSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'name_on_class' => 'user_own_profile',
                        'function_name' => 'user\'s own profile',
                        'function_description' => 'user\'s own profile',
                        'slugs' => 'user-own-profile',
                        'page_title' => 'user\'s own profile',
                        'module_id' => '1',
                        'link_icon' => '<i class="far fa-address-card"></i>',
                        'order' => 1,
                        'table_name' => 'users',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1,2]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'show user details',
                        'function_description' => 'show user details',
                        'slugs' => 'show-user',
                        'name_on_class' => 'show_user',
                        'page_title' => 'user details',
                        'module_id' => '1',
                         'link_icon' => '',
                        'order' => '2',
                        'table_name' => 'users',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create user account',
                        'function_description' => 'create user account',
                        'slugs' => 'add-user',
                        'name_on_class' => 'add_user',
                        'page_title' => 'create a user account',
                        'module_id' => '1',
                        'link_icon' => '',
                        'order' => '3',
                        'table_name' => 'users',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of users',
                        'function_description' => 'list of users',
                        'slugs' => 'list-user',
                        'name_on_class' => 'index',
                        'page_title' => 'list of users',
                        'module_id' => '1',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => '4',
                        'table_name' => 'users',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit user account',
                        'function_description' => 'edit user account',
                        'slugs' => 'edit-user',
                        'name_on_class' => 'edit_user',
                        'page_title' => 'edit user account',
                        'module_id' => '1',
                        'link_icon' => '',
                        'order' => '5',
                        'table_name' => 'users',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete user account',
                        'function_description' => 'delete user account',
                        'slugs' => 'delete-user',
                        'name_on_class' => 'delete_user',
                        'page_title' => 'delete user account',
                        'module_id' => '1',
                        'link_icon' => '',
                        'order' => '6',
                        'table_name' => 'users',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'show role details',
                        'function_description' => 'show role detials',
                        'slugs' => 'show-role-details',
                        'name_on_class' => 'show_role_details',
                        'page_title' => 'role details',
                        'module_id' => '1',
                        'link_icon' => '',
                        'order' => '7',
                        'table_name' => 'roles',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create role',
                        'function_description' => 'create role',
                        'slugs' => 'add-role',
                        'name_on_class' => 'add_role',
                        'page_title' => 'create role',
                        'module_id' => '1',
                        'link_icon' => '',
                        'order' => '8',
                        'table_name' => 'roles',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of roles',
                        'function_description' => 'list of roles',
                        'slugs' => 'list-role',
                        'name_on_class' => 'index',
                        'page_title' => 'list of roles',
                        'module_id' => '1',
                        'link_icon' => '<i class="fas fa-user-tag"></i>',
                        'order' => '9',
                        'table_name' => 'roles',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit role',
                        'function_description' => 'edit role',
                        'slugs' => 'edit-role',
                        'name_on_class' => 'edit_role',
                        'page_title' => 'edit role',
                        'module_id' => '1',
                        'link_icon' => '',
                        'order' => '10',
                        'table_name' => 'roles',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete role',
                        'function_description' => 'delete role',
                        'slugs' => 'delete-role',
                        'name_on_class' => 'delete_role',
                        'page_title' => 'delete role',
                        'module_id' => '1',
                        'link_icon' => '',
                        'order' => '11',
                        'table_name' => 'roles',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'roles permissions',
                        'function_description' => 'roles permissions',
                        'slugs' => 'role-permissions',
                        'name_on_class' => 'index',
                        'page_title' => 'roles permissions',
                        'module_id' => '1',
                         'link_icon' => '<i class="fas fa-shield-alt"></i>',
                        'order' => '12',
                        'table_name' => 'permissions',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit roles permissions',
                        'function_description' => 'edit roles permissions',
                        'slugs' => 'edit-role-permissions',
                        'name_on_class' => 'edit_role_permissions',
                        'page_title' => 'edit role perission',
                        'module_id' => '1',
                        'link_icon' => '',
                        'order' => '13',
                        'table_name' => 'permissions',
                        'func_action' => 'link',
                        'func_type' => 4,
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