<?php
// Include connection file 
require_once 'connect.php';

// Get form data
$email = $_POST['email'];
$password = $_POST['password']; 

// Fetch user data
$sql = "SELECT * FROM users WHERE email='$email'";
$user = $conn->query($sql)->fetch_assoc();

// Verify password
if (password_verify($password, $user['password'])) {

  // Check if admin
  if ($user['is_admin'] == 1) {
    header('Location: admin-home.html');
  } else {  
    header('Location: home.html'); 
  }
  
  exit();

} else {
  echo "Invalid credentials";
}

?>