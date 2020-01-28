Dit is een noteblokje waarin je op kan schrijven hoe je basis dingen doet zodat je ze kan onthouden!

Het gaat per stuk met -----

--------------
onderwerp
--------------
onderwerp etc.


-------------------------------------------------------------------------
Hoe maak je een database connectie aan?

    Voor een database connectie kan je het beste PDO gebruiken.
    De twee opties die er zijn zijn:
        PDO,
        MySqli.

!CODE :: PDO
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";

try {
    $conn = new PDO("mysql:host=$servername;dbname=todolist", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
-------------------------------------------------------------------------
Hoe READ je data uit een database met PDO?

Eerst maak je een functie aan,
dit is omdat je dan READ function makkelijk kan oproepen
en niet meerdere keren hoeft te herschrijven. (DRY code);

Vervolgens:
    Je maakt eerst een connectie naar de database toe zodat je data eruit kan halen.
    (optioneel) Je maakt een $sql variabele waarin je de SQL statement zet.
    Als laatste maak je een nieuwe variabele aan die je result noemt en met deze doe je:
        Perform je een query op de database. (uitleg: https://www.php.net/manual/en/mysqli.query.php).
        En zorg dat je de sql meestuurd, heb je dit in een variabele kan gebruik je de variabele.

    !CODE :: PHP
    function get_user_id(){
        $conn = connectDB();
        $sql = "SELECT user_id FROM users";
        $result = $conn->query($sql);

        echo $result;
    }
-------------------------------------------------------------------------