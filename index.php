<?php
define('BASE_URL', '/framework');
define('BASE_DIR', __DIR__);
// Include utility functions
require_once  'helpers/utility.php';
// require_once 'router.php';
require_once 'database/Database.php';

$config = require 'config/database.php';

$db = new Database($config);



if(isset($_GET['id'])){
    $query = "select * from posts where id = ?";
}else{
    $query = "select * from posts";
}

$posts = $db->query($query, [$_GET['id']])->fetchAll();

dd($posts);
