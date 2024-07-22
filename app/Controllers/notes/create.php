<?php
require base_path('vendor/Validator.php');

$config = require base_path('config/database.php');

$db = new Database($config);

$header = 'Create Note';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $errors = [];
    
    if(! Validator::string($_POST['body'], 1, 1000)){
        $errors['body'] = 'A body with atleast 1 character and at max 1000 characters is required.';
    }

    if(empty($errors)){
        $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)",[
            'user_id' => 1,
            'body' => $_POST['body']
        ]);

        header('Location: http://localhost/framework/notes');
    }
}

require_once base_path('views/notes/create.php');