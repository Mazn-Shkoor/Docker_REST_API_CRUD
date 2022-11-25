<?php
declare(strict_types=1);

require 'vendor/autoload.php';

use MyApp\Data\Database;
use MyApp\Error\ErrorHandler;
use MyApp\Products\ProductController;
use MyApp\Products\ProductGateway;

header("Content-type: application/json; charset=UTF-8");

$handler = new ErrorHandler();
set_exception_handler([$handler, 'handleException']);

$url = $_SERVER['REQUEST_URI'];
$parseUrl = str_replace('?', '/', $url); // parse query parameter

$parts = explode("/", $parseUrl);


if($parts[1] != "products") {
    http_response_code(404);
    exit;
}

$id = $parts[2] ?? null;

$hostName = 'db';
$dbName = 'mydb';
$userName = 'root';
$password = 'mypass';

$db = new Database($hostName, $dbName, $userName, $password);

$gateway = new ProductGateway($db);

$controller = new ProductController($gateway);

$controller->processRequest($_SERVER['REQUEST_METHOD'], $id);




