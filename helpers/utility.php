<?php
require_once base_path('app/Controllers/Response/Response.php');

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
    return base_url() . '/' . ltrim($path, '/');
}

function base_url(){
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
}


function abort($code = 404)
{
    http_response_code($code); // Set HTTP response code
    require base_path('views/http-response/' . $code . '.php');
    die();  // Stop script execution
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path){
    return BASE_PATH . $path;
}