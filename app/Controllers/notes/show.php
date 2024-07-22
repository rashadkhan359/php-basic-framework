<?php 

$header = 'Note';

$config = require base_path('config/database.php');

$db = new Database($config);

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
    ])->findOrFail();

$currentUserId = 1;

authorize($note['user_id'] === $currentUserId);

require_once base_path('views/notes/show.php');