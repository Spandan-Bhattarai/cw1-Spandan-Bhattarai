<?php
// Include connection file 
require_once 'connect.php';

$id = $_POST['id'];
$query = "DELETE FROM books WHERE id=$id"; 
if (mysqli_query($conn, $query)) {
    // Redirect to login page
    header('Location: admin-books.html');
    exit;
  } else {
    echo "Error inserting user: " . mysqli_error($conn);
  }

?>