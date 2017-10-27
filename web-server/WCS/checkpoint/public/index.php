<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/db.php';
require_once __DIR__ . '/../app/config.php';

$route = $_GET['route'] ?? '';
$id = $_GET['id'] ?? '';

// Matching index.php?route=home URL
if ($route == 'programs') {
    $controller = new \Controller\ProgramController();
    echo $controller->indexAction();
} elseif ($route == 'add') {
    $controller = new \Controller\ProgramController();
    echo $controller->addAction();
} elseif ($route == 'program') {
    $controller = new \Controller\ProgramController();
    echo $controller->indexone($id);
}
 elseif ($route == 'audience') {
    $controller = new \Controller\ProgramController();
    echo $controller->audience();
} else {
    http_response_code(404);
    echo 'Page inconnue';
}

