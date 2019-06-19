<?php
use Bramus\Router\Router;

require __DIR__ . '/vendor/autoload.php';

$router = new Router;

$router->get('/hello', function() {
    echo "Hello world";
});

$router->get('/articles', function() {
    echo "Liste des articles";
});

$router->get('/articles/{id}', function($id) {
    echo "Voici l'article " . $id;
});

$router->run();