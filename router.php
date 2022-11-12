<?php

// ROUTER très minimaliste

// tableau de routes
$routes = [
    "/not-found" => "views/not-found.html",
    "/home" => "views/home.html",
    "/login" => "views/home.html",
    "/home/utilisateur" => "views/home-utilisateur.php"
];

$url = $_SERVER['REQUEST_URI'];

if (array_key_exists($url, $routes)) {
    $destination = $routes[$url];
} else {
    $destination = $routes['/not-found'];
    http_response_code(404);
}

require $destination;