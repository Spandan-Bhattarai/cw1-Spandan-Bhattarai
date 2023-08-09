<?php

// Include connection file 
require_once 'connect.php';

$book_name = $_POST['book_name']; 
$isbn = $_POST['isbn'];
$author = $_POST['author'];
$release_date = $_POST['release_date'];


$sql = "INSERT INTO requested_books (book_name, isbn, author, release_date) 
        VALUES ('$book_name', '$isbn', '$author', '$release_date')";
        
$conn->query($sql);
              
header('Location: requestbook.php');

?>