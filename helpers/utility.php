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
    $fullUrl = BASE_URL . $value;
    return $_SERVER['REQUEST_URI'] === $fullUrl;
}

function url($path)
{
    return BASE_URL . '/' . ltrim($path, '/');
}


function abort($code = 404)
{
    http_response_code($code); // Set HTTP response code
    require './views/http-response/' . $code . '.php';
    die();  // Stop script execution
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}