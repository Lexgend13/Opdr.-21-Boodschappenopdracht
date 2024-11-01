<?php

use Illuminate\Support\Facades\Route;

$router->get('', 'controllers/index.php');
#Route::get('', function () {return view('welcome');});
$router->get('create', 'controllers/create.php');
$router->post('NAME', 'controllers/add-product.php');
$router->get('test', 'controllers/test.php');


// $router->define([
//     '' => 'controllers/index.php',
//     'create' => 'controllers/create.php'
// ]);
