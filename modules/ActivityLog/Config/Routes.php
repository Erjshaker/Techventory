<?php
$routes->group('activities', ['namespace' => 'Modules\ActivityLog\Controllers'], function($routes)
{
  $routes->get('/', 'Activity::index');
  $routes->get('(:num)', 'Activity::index/$1');
  $routes->match(['get', 'post'], '/', 'Activity::index');
  $routes->match(['get', 'post'], '(:num)', 'Activity::index/$1');
  $routes->get('show/(:num)', 'Activity::show_activity/$1');
  $routes->get('own/(:num)', 'Activity::user_own_profile/$1');
  $routes->match(['get', 'post'], 'add', 'Activity::add_activity');
  $routes->match(['get', 'post'], 'edit/(:num)', 'Activity::edit_activity/$1');
  $routes->delete('delete/(:num)', 'Activity::delete_activity/$1');
});
