<?php

require __DIR__ . '/helpers.php';

$routes = require rootpath() . '/routes.php';
$request = parse_url($_SERVER['REQUEST_URI']);
$uri = $request['path'];

if (! array_key_exists($uri, $routes)) {
    abort(404);
}

require rootpath() . '/controllers/' . $routes[$uri] . '.php';

$params = [];
if (array_key_exists('query', $request)) {
    parse_str($request['query'], $params);
}

$controller = new $routes[$uri];
$controller(...$params);
