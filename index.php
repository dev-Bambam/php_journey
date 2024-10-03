
<?php
include "database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // collect the form data 
    $name = $_POST['name'];
    $email = $_POST['email'];

    // siimple validation
    if (empty($name)) {
        die('Name is required');
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email');
    } else {
        // insert into database
        $sql = "INSERT INTO users(name, email) VALUES (:name, :email)";
        $statement = $pdo->prepare($sql);
        $statement->execute([':name' => $name, ':email' => $email]);

        echo "welcome name:$name email:$email";
    }
}