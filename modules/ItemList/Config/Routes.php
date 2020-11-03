<?php
$routes->group('items', ['namespace' => 'Modules\ItemList\Controllers'], function($routes)
{
    $routes->get('/', 'Item::index');
    $routes->get('(:num)', 'Item::index/$1');
    $routes->match(['get', 'post'], '/', 'Item::index');
    $routes->match(['get', 'post'], '(:num)', 'Item::index/$1');
    $routes->get('show/(:num)', 'Item::show_item/$1');
    $routes->get('own/(:num)', 'Item::user_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Item::add_item');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Item::edit_item/$1');
    $routes->delete('delete/(:num)', 'Item::delete_item/$1');
});
