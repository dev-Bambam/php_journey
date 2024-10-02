<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // collect the form data 
    $name = $_POST['name'];
    $email = $_POST['email'];

    // simple output
    echo "Hello, ". htmlspecialchars($name) . " your email is: " . htmlspecialchars($email);
}
