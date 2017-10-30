<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>

	<?php
	session_start();
	$errors = [];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kazino";

	if (isset($_POST["submit"]) && !empty($_POST["vardas"]) && !empty($_POST["slaptazodis"])) {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$vardas = $_POST["vardas"];
		$slaptazodis = $_POST["slaptazodis"];

		$stmt = $conn->query("SELECT * FROM vartotojai WHERE vardas='$vardas'");
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);        

		$conn = null;
		if (!empty($result)) {
			$slaptazodis_hashas = $result[0]['slaptazodis'];
			password_verify ($slaptazodis, $slaptazodis_hashas);
			if (password_verify ($slaptazodis, $slaptazodis_hashas)) {
				$_SESSION['login'] = "logged";
				$_SESSION['vardas'] = $result[0]['vardas'];
		// header("Location: index.php");
				setcookie("vardas_sausainis", $result[0]['vardas'], time() + (86400 * 30), "/");
			} else { $errors[] = "Neteisingas slaptazodis"; }
		} else { $errors[] = "Neteisinga informacija"; }
	} elseif (isset($_POST["submit"])) { $errors[] = "Uzpildykite laukus"; }

	if (isset($_POST['logout'])) {
		session_destroy();
		unset($_SESSION['login']);
	}

	if (isset($_SESSION['login'])) {
		echo "Jus prijungtas";
		header("Location: index.php");
	}

	?>

<div class="container-fluid headeris">

		<div class="row align-items-center">
			<?php
			if (isset($_SESSION["login"])) {
				?>
				<div class="col-1">
					<form method="POST">
						<button class="btn btn-danger mt-1" name="logout">Log out</button>
					</form>
				</div>
				<div class="col-2">
					<?php				
					echo "You are logged in! Your level is " . $_SESSION['lygis'];
					?>
				</div>

				<?php				
			} else {
				?>
				<div class="col-6 col-lg-1 text-right">
					<form method="POST">
						<a class="btn btn-danger mt-1" name="login" href="login.php">Log in</a>
					</form>
				</div>
				<div class="col-6 col-lg-1">
					<form method="POST">
						<a class="btn btn-success mt-1" name="login" href="register.php">Register</a>
					</form>
				</div>
			</div>
		</div>
		<div class="container">
			<?php
		}
		?>

		<div class="row">
			<div class="col-12 col-lg-4 mt-3">
				<span class="red_error"><?php 
				foreach ($errors as $error) {
					echo $error;
				}
				?>
			</span>
			<h3>Log in</h3>
			<form method="POST">
				<input class="form-control" type="text" name="vardas">
				<input class="form-control" type="password" name="slaptazodis">
				<button class="form-control btn btn-success mt-1" name="submit">Submit</button>
			</form>
			<?php
			if (isset($_SESSION['login'])) {
				?>
				<form method="POST">
					<button class="form-control btn btn-danger mt-1" name="logout">Log out</button>
				</form>
				<?php
			}
			?>
		</div>
	</div>
</div>
<script src="script.js"></script>
</body>
</html>