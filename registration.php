<?php
session_start();
require_once'../bdfilms/connexion.inc.php'; 

$table = "dossier";
$name = $_POST['name'];
$pass = $_POST['password'];


$query = "SELECT * FROM $table WHERE '$name'=name AND '$pass'=password";

$result = mysqli_query($connexion, $query) or die("Error "); 

$num = mysqli_num_rows($result);

if ($num==1) {
	echo "User name is already taken";
}else{
	$reg="INSERT INTO dossier (name, password) VALUES('$name', '$pass')";
	$_SESSION['username'] = $name;

	mysqli_query($connexion, $reg);
	echo "Registration is successful";
	header('location: cart.php');
}

?>