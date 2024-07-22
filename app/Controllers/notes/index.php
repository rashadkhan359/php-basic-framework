<?php 

$header = 'Notes';

$config = require base_path('config/database.php');

$db = new Database($config);

$notes = $db->query('select * from notes where user_id = 1')->get();

require_once base_path('views/notes/index.php');