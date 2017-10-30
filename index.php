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
	 <meta charset="UTF-8">
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
				<div class="col-md-5 col-lg-1">
					<form method="POST">
						<button class="btn btn-danger mt-1" name="logout">Log out</button>
					</form>
				</div>
				<div class="col-md-5 col-lg-2 prisijunges_text">
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
			<div class="col-md-12 col-lg-8">
				<div class="row mt-5">
					<div class="col-12 text-center">
						<h1>Sveiki atvyke!</h1>
						<p style="text-align:justify;">Lorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių. Šis tekstas išliko beveik nepasikeitęs ne tik penkis amžius, bet ir įžengė i kopiuterinio grafinio dizaino laikus. Jis išpopuliarėjo XX a. šeštajame dešimtmetyje, kai buvo išleisti Letraset lapai su Lorem Ipsum ištraukomis, o vėliau -leidybinė sistema AldusPageMaker, kurioje buvo ir Lorem Ipsum versija. 
						</p>
					</div>
				</div>
				<div class="row mt-5">
					<div id="kauliukas_pirmas" class="col-4">
						<img class="img-fluid" src="images/1.jpg">
					</div>
					<div id="kauliukas_antras" class="col-4">
						<img class="img-fluid" src="images/1.jpg">
					</div>
					<div id="kauliukas_trecias" class="col-4">
						<img class="img-fluid" src="images/1.jpg">
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-lg-6 col-md-12 home_buttons_left">
						<input id="start_game" class="btn btn-primary" value="Pradeti zaidima"
					<?php
					if (!isset($_SESSION["login"])) { echo "disabled='disabled'"; }
						?>
						>
					</div>
					<div class="col-lg-6 col-md-12 home_buttons_right">
						<input id="roll_dice" class="btn btn-success nulinis" value="Sukti kauliukus"
					<?php
					if (!isset($_SESSION["login"])) { echo "disabled='disabled'"; }
					?>
						>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>