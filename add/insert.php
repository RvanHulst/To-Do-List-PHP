<?php  
$servername = "localhost";
$username = "root";
$password = "mysql";
$myDB = "todolist";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected succesfully"
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


 		$stmt = $conn->prepare("INSERT INTO user (name, age, email, nummer)VALUES (:name, :age, :city, :vervoer )");

 		$name = $_POST['name'];
 		$age = $_POST['age'];
 		$email = $_POST['email'];
 		$nummer = $_POST['nummer'];

		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':age', $age);
		$stmt->bindParam(':email', $city);
		$stmt->bindParam(':nummer', $nummer);


		$stmt->execute();

		header('location: index.php');

		$conn = null;

 ?>