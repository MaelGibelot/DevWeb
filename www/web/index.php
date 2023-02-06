<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/style.css" rel="stylesheet">
    <title>Module X32I100</title>
</head>
<body>
<ul class="navbar">
    <li>
        <a href="/">Accueil</a>
    </li>
    <li class="dropbtn">
        <a class="dropbtn" href="/Annonce/list">Annonces JSON</a>
    </li>
    <li class="dropbtn">
        <a class="dropbtn" href="/Annonce/listbd">Annonces BD</a>
    </li>
</ul>
</body>
</html>
<?php

require '../vendor/autoload.php';

use Controllers\AnnonceController;

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {

    $r->get('/', function () {
        echo 'Bienvenue sur la page d\'accueil :D';
    });

    $r->get('/Annonce/list', function () {
        $pController = new AnnonceController;
        $pController->list();
    });
    $r->get('/Annonce/listbd', function () {
        $pController = new AnnonceController;
        $pController->listbd();
    });
    $r->get('/Annonce/create', function () {
        $pController = new AnnonceController;
        $pController->create();
    });
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        die('NOT_FOUND');
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        die('Not Allowed');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        print $handler($vars);
        break;
}