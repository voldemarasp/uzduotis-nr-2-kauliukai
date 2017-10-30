<?php
session_start();
$errors = [];
if (isset($_SESSION["login"])) { header("Location: index.php"); }

	if (isset($_POST["submit"]) && !empty($_POST["vardas"]) && !empty($_POST["slaptazodis"])) {

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "kazino";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    
		    $vardas = $_POST["vardas"];
		    $slaptazodis = $_POST["slaptazodis"];

		    $stmt = $conn->query("SELECT * FROM vartotojai WHERE vardas='$vardas'");
		    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

		    if(!empty($result)) {
		    	$errors[] = "Username exists";
		    } else {
			$stmt = $conn->prepare("INSERT INTO vartotojai (vardas, slaptazodis)
				VALUES (:vardas, :slaptazodis)");
			$stmt->bindParam(':vardas', $vardas);
			$stmt->bindParam(':slaptazodis', $slaptazodis);

    // insert a row
			$vardas = htmlspecialchars($_POST["vardas"]);
			$slaptazodis2 = htmlspecialchars($_POST["slaptazodis"]);
			$slaptazodis = password_hash ($slaptazodis2, PASSWORD_DEFAULT);

			$stmt->execute();
			$conn = null;
			header("Location: login.php");
			}
		}
		catch(PDOException $e)
		{
    //echo $sql . "<br>" . $e->getMessage();
		}

		
		
	} elseif (isset($_POST["submit"])) { $errors[] = "Fill your info"; }
?>

	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title></title>
	</head>
	<body>
<div class="container-fluid headeris">

		<div class="row align-items-center">
			<div class="col-6 col-lg-1 text-right">
				<form method="POST">
					<a class="btn btn-danger mt-1" name="login" href="login.php">Log in</a>
				</form>
			</div>
			<div class="col-6 col-lg-1">
				<form method="POST">
					<a class="btn btn-success mt-1" name="login" href="index.php">Home</a>
				</form>
			</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-4 mt-3">
<span class="red_error"><?php 
foreach ($errors as $error) {
echo $error;
}
?>
</span>
					<h3>Register</h3>
					<form method="POST">
						<input class="form-control" type="text" name="vardas">
						<input class="form-control" type="password" name="slaptazodis">
						<button class="form-control btn btn-success mt-1" name="submit">Submit</button>
					</form>
				</div>
				

</div>
</div>
<script src="script.js"></script>
</body>
</html>