<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";
use CoffeeCode\Router\Router;

$route = new Router('https://www.localhost/acme', ":");

$route->namespace("Source\App");
$route->get("/","Web:home");
$route->get("/sobre","Web:about");


/*
 * Erros Routes
 */

//$route->namespace("Source\App")->group("/ops");
$route->get("/{errcode}", "Web:error");

$route->dispatch();
if($route->error()){
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();