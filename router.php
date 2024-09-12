<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// if($uri === '/'){
//     require 'controllers/index.php';
// }
// elseif($uri === '/contact'){
//     require 'controllers/contact.php';
// }
// elseif($uri === '/about'){
//     require 'controllers/about.php';
// } you can use this or the one below but I am going to use the one below

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php'
];
/**
 * Requires the appropriate controller for the given URI, or aborts if no matching route is found.
 *
 * @param string $uri The current URI.
 * @param array $routes An associative array of URIs to their corresponding controller paths.
 */
function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}
function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}
routeToController($uri, $routes);