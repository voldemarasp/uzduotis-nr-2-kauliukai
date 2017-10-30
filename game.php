<?php

session_start();

header("Content-type:application/json");

$data = [];

if (!empty($_POST["sukimas"])) {
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kazino";

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	$stmt = $conn->prepare("INSERT INTO zaidimai (sukimas, rezultatas, vartotojas, data)
		VALUES (:sukimas, :rezultatas, :vartotojas, :data)");
	$stmt->bindParam(':sukimas', $sukimas);
	$stmt->bindParam(':rezultatas', $rezultatas);
	$stmt->bindParam(':vartotojas', $vartotojas);
	$stmt->bindParam(':data', $data);

	$sukimas = htmlspecialchars($_POST["sukimas"]);
	$rezultatas = htmlspecialchars($_POST["rezultatas"]);
	$vartotojas = $_SESSION['vardas'];
	$data = date("Y-m-d");
	$stmt->execute();
	
	$conn = null;
}


	try {

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kazino";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!empty($_SESSION["vardas"])) {

    $stmt = $conn->prepare("SELECT * FROM zaidimai WHERE vartotojas = :useris ORDER BY id desc LIMIT 10");
    $stmt->bindParam(':useris', $useris, PDO::PARAM_INT);
    
    $useris = $_SESSION["vardas"];
	
	$stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	} elseif (!empty($_GET["username"])) {

    $stmt = $conn->prepare("SELECT * FROM zaidimai WHERE vartotojas = :useris ORDER BY id desc");
    
    $stmt->bindParam(':useris', $useris, PDO::PARAM_INT);
    $useris = $_GET["username"];
	
	$stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
    $stmt = $conn->prepare("SELECT * FROM zaidimai ORDER BY id desc");
	
	$stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    $conn = null;
	}
	catch(PDOException $e)
    {
    //echo $sql . "<br>" . $e->getMessage();
    }


echo json_encode($result);