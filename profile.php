<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

// Connect to Redis server
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

// Get user data from Redis
$data = $redis->get('user:' . $_SESSION['username']);

// Parse data as JSON and return to client
header('Content-Type:

use profiles;
db.createCollection("user_profiles");

// Connect to MongoDB server
$client = new MongoDB\Client("mongodb://localhost:27017");

// Select database and collection
$collection = $client->profiles->user_profiles;

// Insert data into collection
$insertResult = $collection->insertOne([
  'username' => $_SESSION['username'],
  'email' => $email,
  'mobile' => $mobile,
  'dob' => $dob,
  'age' => $age,
  'address' => $address,
  'location' => $location,
  'zipcode' => $zipcode,
  'state' => $state,
  'country' => $country
]);

// Close MongoDB connection
$client->close();

<button id="login-btn">Login</button>

<script>
  document.getElementById("login-btn").addEventListener("click", function() {
    // Call login function
    login(username, password);
  });

  function login(username, password) {
    // Make AJAX call to server to verify login credentials

    // If login successful
    var user = {
      username: username,
      email: email,
      mobile: mobile,
      dob: dob
    };

    // Store user data in local storage
    localStorage.setItem("user", JSON.stringify(user));
  }
</script>

