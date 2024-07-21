<?php

$config = require 'config/database.php';

$db = new Database($config);

$header = 'Create Note';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $errors = [];
    if(strlen($_POST['body']) === 0){
        $errors['body'] = 'The body is required.';
    }

    if(strlen($_POST['body']) > 1000){
        $errors['body'] = 'The body cannot be more that 1000 characters.';
    }

    if(empty($errors)){
        $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)",[
            'user_id' => 1,
            'body' => $_POST['body']
        ]);
    }
}

require_once 'views/note-create.php';