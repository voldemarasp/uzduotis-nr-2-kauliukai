<?php
session_start();

if (isset($_POST['logout'])) {
session_destroy();
unset($_SESSION['login']);
header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="fa/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Voldemaro Kazino</title>
</head>
<body>
<div class="container-fluid headeris">

		<div class="row align-items-center">
			<?php
			if (isset($_SESSION["login"])) {
			?>
			<div class="col-6 col-lg-1">
				<form method="POST">
					<button class="btn btn-danger mt-1" name="logout">Log out</button>
				</form>
			</div>
			<div class="col-6 col-lg-2 prisijunges_text">
				<?php				
				echo "Welcome, " . $_SESSION['vardas'];
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

		<?php
	}
	?>
</div>
</div>
<div class="container">
<div class="row">
	<div class="col-md-12 col-lg-4 mt-5 text-center">
		<table class="table table-responsive-md">
			<thead>
				<tr>
					<th scope="col">Zaidimas</th>
					<th scope="col">Rezultatas</th>
					<th scope="col">Data</th>
				</tr>
			</thead>
			<tbody id="statistika">

			</tbody>
		</table>
		<a href="stats.php">Statistikos kreive</a>
	</div>	
	<div class="col-md-12 col-lg-8 text-center">
		<canvas id="myChart" width="400" height="400"></canvas>
		<a class="btn btn-info mt-3" href="index.php"><i class="fa fa-chevron-left" aria-hidden="true"></i>  Atgal</a>
	</div>
</div>
</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>