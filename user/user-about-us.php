<?php

include 'connect.php';
include 'user-auth.php';

$sql = "SELECT cover_image_link, book_link, title, author, description FROM books";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <style>
    .book {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      padding: 10px;
    }

    .book-image {
      flex: 1;
      margin-right: 20px;
    }

    .book-info {
      flex: 3;
    }

    .book {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      border: 1px solid #ddd;
    }
  </style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">Book Paradime</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="requestbook.php">Book Requests </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user-about-us.php">About us </a>
        </li>
      </ul>
      <div class="d-flex justify-content-end">
        <a href="/project/clear_cookie.php" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </nav>
  <!-- About us section -->
  <div class="container my-5">

  </div>
  <footer class="bg-dark text-light mt-5">
    <div class="container py-3">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; 2023 BookParadime </p>
        </div>
        <div class="col-md-6 text-md-right">
          <a class="text-light" href="#">Terms of Use</a> |
          <a class="text-light" href="#">Privacy Policy</a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>