<?php

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

// Remove the base path from the request URI
$uri = substr($path, strlen(BASE_URL));

$routes = require 'routes/web.php';

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        // Route to the appropriate controller (assuming your controllers are in 'app/Controllers/')
        $controller_root = 'app/Controllers/';

        require $controller_root . $routes[$uri];

    } else {
        abort(); // Consistent error handling
    }
}

routeToController($uri, $routes);

