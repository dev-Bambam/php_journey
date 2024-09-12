<?php
require 'functions.php';
// require 'router.php';

// connect to database, and execute a query 
class Database
{
    public function query()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4';
        $pdo = new PDO($dsn);
        $statement = $pdo->prepare("select * from posts");
        $statement->execute();
        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();
$db->query();

foreach ($posts as $post) {
    echo "<li>" . $post['Title'] . "</li>";
}