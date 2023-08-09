<?php

// Check for admin cookie
if(!isset($_COOKIE['user_type']) || $_COOKIE['user_type'] != 'admin') {
  // Not logged in or not admin
  header('Location: login.html'); 
  exit();
}

?>