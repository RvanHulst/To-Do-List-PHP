<?php
    include "navbar.php";
    include "./includes/dbconn.php";
    session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <link rel="stylesheet" href="images/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Raven| Login</title>

</head>
<body>
    <div class="test">
<header>
           <a href="login.php"><i class="fas fa-sign-in-alt"></i></a>
    </nav>
</header>
    
<main>

    <div class="wrapper">
        <div class="nav-login">
<?php
    if (!isset($_SESSION['u_id'])) { ?>
            <form action="includes/login.inc.php" method="POST">
                <input type="text" name="uid" placeholder="Username/e-mail">
                <br>
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <div class="container">
                 <input class="submit" name="submit" type="submit" value="Submit" />
                 <input href="" class="submit" name="submit" type="submit" value="Sign Up" />
                </div>
            </form>
<?php } ?>
                </div>


    </div>
</div>
</main>
</body>
</html>















































































<!-- <main>

    <section class="main-container">
        <div class="main-wrapper">

            <?php
            if (isset($_SESSION['u_id'])) {
                echo "You are logged in!";
            }
            ?>
        </div>
    </section>
</main>
 -->