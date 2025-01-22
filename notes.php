<?php
include 'Database.php';
include 'utils.php';


$config = include 'config.php';

$db = new Database($config['database'], 'root', 'CLFA63827S'); 


$statement = $db->query("SELECT * FROM notes");
$notes = $statement->fetchAll();

$navTitle = "Notes";
include 'views/notes.view.php';
