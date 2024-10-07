<?php

use PhpMvc\Http\Request;
use PhpMvc\Http\Response;
use PhpMvc\Http\Route;

require_once __DIR__ . '/../vendor/autoload.php';
require_once  __DIR__ . '/../routes/web.php';


/*
 * resolving the routes
 */
$route = new Route(new Request, new Response);
dump($route->resolve());