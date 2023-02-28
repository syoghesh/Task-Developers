<?php

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['dob'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $dob = $_POST['dob'];

    // Your validation and database insertion code here

}

CREATE DATABASE users;
USE users;
CREATE TABLE registered_users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  dob DATE NOT NULL,
  mobile VARCHAR(15) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

// Connect to database
$mysqli = new mysqli('localhost', 'username', 'password', 'users');

// Prepare SQL statement
$stmt = $mysqli->prepare("INSERT INTO registered_users (username, email, password, dob, mobile) VALUES (?, ?, ?, ?, ?)");

// Bind parameters to statement
$stmt->bind_param("sssss", $username, $email, $password, $dob, $mobile);

// Set parameters
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash password before storing in database
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];

// Execute statement
$stmt->execute();

// Close statement and database connection
$stmt->close();
$mysqli->close();



?>
