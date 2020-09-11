<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

/**
 * Controllers
 */
$router->namespace("Source\App\Controllers");

/**
 * WEB
 */
$router->group(null);
$router->get("/", "Web:home", "web.home");
$router->get("/sobre", "Web:about", "web.about");
$router->get("/contato", "Web:contact", "web.contact");

/**
 * Erros
 */
$router->group("ops");
$router->get("/{errcode}", "Web:error");

/**
 * Executa as rotas
 */
$router->dispatch();

/**
 * Trata erro de rota
 */
if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}