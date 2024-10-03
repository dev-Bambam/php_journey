<?php
include "database.php";
include "index.php";

$name;
$email;

$sql_query = "INSERT INTO users(name, email) VALUES (:name, :email)";
$statement = $pdo->prepare($sql_query);
$statement->execute([':name' => $name, ':email' => $email]);

echo "Record inserted successfully" . $name;