<?php
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
        echo "Hello, " . htmlspecialchars($name) . " your email is: " . htmlspecialchars($email);
    }
}
