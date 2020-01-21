<?php
  session_start();
?>
<head>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">To Do List</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
          <a class="nav-link" href="overview.php">Overview <span class="sr-only">(current)</span></a>
       </li>
      <?php 
if (!isset($_SESSION['u_id'])) {
            echo '<li class="nav-item active">
        <a class="nav-link" href="login.php">signin</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="signup.php">signup</a>
      </li>';

        } else {
            echo '';

        }
      ?>
      
      <?php

        if (isset($_SESSION['u_id'])) {
            echo '<form id="logout" action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="submit">logout</button>
                  </form>';
        } else {
            echo '';

        }
        ?>
    </ul>
  </div>
</nav>
