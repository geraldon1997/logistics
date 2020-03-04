<?php
include 'vendor/autoload.php';

use App\Controllers\Router;

$pageName = str_replace('/', '', $_SERVER['REQUEST_URI']);
Router::route($pageName);
