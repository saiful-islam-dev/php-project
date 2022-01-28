<?php 
 session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Sign up</title>
  </head>
  <body>  
        
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ms-auto my-2" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
              
        <?php
          if(isset($_SESSION['id'])){
          ?>
            <li class="nav-item">
                <a class="nav-link" href="alluser.php">All User</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>
          <?php
          }else{
            ?>
                  <li class="nav-item">
                  <a class="nav-link" href="login.php">Logni</a>
                </li>
            <?php
          }
        ?>

      </ul>
    </div>
  </div>
</nav>

