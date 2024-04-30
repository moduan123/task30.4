<?php
require_once('class Database.php');
require_once('class Validation.php');
require_once('class Session.php');

// Database
$db = new Database();
$conn = $db->getConnection();

// Validation
$email = "test@example.com";
if (Validation::validateEmail($email)) {
    echo "Valid email";
} else {
    echo "Invalid email";
}

$password = "password123";
if (Validation::validatePassword($password)) {
    echo "Valid password";
} else {
    echo "Invalid password";
}
