<?php
require 'functions.php';
require 'Database.php';
require 'router.php';

$config = require 'config.php';
$db = new Database($config);
$id = $__GET['id'];
$query = 'SELECT * FROM notes WHERE id = :id';

$notes = $db->query($query, ['id' => $id])->fetch();

//print out posts
foreach ($notes as $post) {
    echo "<li>" . $post['Title'] . "</li>";
}