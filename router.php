<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require 'routes/web.php';

function routeToController($uri, $routes)
{
    // Remove trailing slash if it exists, unless it's the root path
    $uri = $uri !== '/' ? rtrim($uri, '/') : $uri;
    
    if (array_key_exists($uri, $routes)) {
        // Route to the appropriate controller (assuming your controllers are in 'app/Controllers/')
        $controller_root = 'app/Controllers/';

        require $controller_root . $routes[$uri];

    } else {
        abort(); // Consistent error handling
    }
}

routeToController($uri, $routes);

