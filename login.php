<?php
    include "navbar.php";
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
<header>
           <a href="login.php"><i class="fas fa-sign-in-alt"></i></a>
    </nav>
</header>

<main>

    <div class="wrapper">

            <div class="main-wrapper">
                <!--            <ul>-->
                <!--                <li><a href="login.php">Home</a></li>-->
                <!--            </ul>-->
                <div class="nav-login">
                    <?php
                    if (isset($_SESSION['u_id'])) {
                        echo '';
                    } else {
                        echo '<form action="includes/login.inc.php" method="POST">
                                <input type="text" name="uid" placeholder="Username/e-mail">
                                <input type="password" name="pwd" placeholder="Password">
                                <button type="submit" name="submit">Login</button>
                                <a class="signup" href="signup.php">Sign up</a>
                            </form>
                            ';
                    }
                    ?>
                </div>
            </div>
    </div>
</main>
</body>
</html>

















































































<main>

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
