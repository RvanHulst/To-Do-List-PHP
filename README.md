To Do List PHP

17/12/19

opdracht begonnen , had wel even wat moeite met een database op te zetten omdat ik het een beetje vergeten was duurde het waar langer dan verwacht , vandaag probeer ik een funcutie toe te voegen en de index zo ver mogelijk af te maken



<div class="nav-login">
                    <?php
                    if (isset($_SESSION['u_id'])) {
                        echo '';
                    } else {
                        echo '<form action="includes/login.inc.php" method="POST">
                                <input type="text" name="uid" placeholder="Username/e-mail">
                                <br>
                                <input type="password" name="pwd" placeholder="Password">
                                <br
                                <button type="submit" name="submit">Login</button>
                                <a class="signup" href="signup.php"></a>
                            </form>
                            ';
                    }
                    ?>
                </div>