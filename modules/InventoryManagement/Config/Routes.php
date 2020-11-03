<?php
$routes->group('inventories', ['namespace' => 'Modules\InventoryManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Inventory::index');
    $routes->get('(:num)', 'Inventory::index/$1');
    $routes->match(['get', 'post'], '/', 'Inventory::index');
    $routes->match(['get', 'post'], '(:num)', 'Inventory::index/$1');
    $routes->get('show/(:num)', 'Inventory::show_inventory/$1');
    $routes->get('own/(:num)', 'Inventory::user_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Inventory::add_inventory');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Inventory::edit_inventory/$1');
    $routes->delete('delete/(:num)', 'Inventory::delete_inventory/$1');
});
$routes->group('borrowers', ['namespace' => 'Modules\InventoryManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Borrower::index');
    $routes->get('(:num)', 'Borrower::index/$1');
    $routes->match(['get', 'post'], '/', 'Borrower::index');
    $routes->match(['get', 'post'], '(:num)', 'Borrower::index/$1');
    $routes->get('show/(:num)', 'Borrower::show_borrower/$1');
    $routes->get('own/(:num)', 'Borrower::user_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Borrower::add_borrower');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Borrower::edit_borrower/$1');
    $routes->delete('delete/(:num)', 'Borrower::delete_borrower/$1');
});

