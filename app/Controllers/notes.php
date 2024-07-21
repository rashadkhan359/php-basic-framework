<?php 

$header = 'Notes';

$config = require 'config/database.php';

$db = new Database($config);

$notes = $db->query('select * from notes where user_id = 1')->get();

require_once 'views/notes.php';