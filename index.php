<?php
define('BASE_URL', '/framework');
define('BASE_DIR', __DIR__);
// Include utility functions
require_once  'helpers/utility.php';

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

// Remove the base path from the request URI
$uri = substr($path, strlen(BASE_URL));

$routes = [
    '/' => 'index.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php'
];

// Route to the appropriate controller (assuming your controllers are in 'app/Controllers/')
$controller_root = 'app/Controllers/';

if(array_key_exists($uri, $routes)){
    require $controller_root . $routes[$uri];
}else{
    abort(); // Consistent error handling
}
