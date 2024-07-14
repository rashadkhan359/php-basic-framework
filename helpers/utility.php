<?php
require 'app/Controllers/Response/Response.php';

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    $rootFolder = "/framework";
    $fullUrl = $rootFolder . $value;
    return $_SERVER['REQUEST_URI'] === $fullUrl;
}


function abort($message = null, $code = 404) {
    http_response_code($code); // Set HTTP response code
    require './views/http-response/' . $code . '.php';
    die();  // Stop script execution
}
