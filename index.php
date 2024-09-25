<?php
require 'functions.php';
require 'Database.php';
require 'router.php';

$config = require 'config.php';
$db = new Database($config);
$id = $__GET['id'];
$query = 'SELECT * FROM posts WHERE id = :id';

$posts = $db->query($query, ['id' => $id])->fetch();

//print out posts
foreach ($posts as $post) {
    echo "<li>" . $post['Title'] . "</li>";
}