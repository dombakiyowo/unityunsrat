<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Here, you can perform database or file-based validation
    // For simplicity, let's assume valid credentials are:
    $validUsername = 'unity';
    $validPassword = 'unity123';

    if ($username === $validUsername && $password === $validPassword) {
        // Authentication successful
        $_SESSION['username'] = $username;
        header('Location: admin.php');
    } else {
        // Authentication failed
        echo 'Invalid username or password. Please try again.';
    }
}