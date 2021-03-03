<?php
session_start();
require_once'../bdfilms/connexion.inc.php'; 

$table = "dossier";
$name = $_POST['user'];
$pass = $_POST['password'];


$query = "SELECT * FROM $table WHERE '$name'=name AND '$pass'=password";
$s = $connexion->prepare($query);
$result = mysqli_query($connexion, $query) or die("Error "); 

$num = mysqli_num_rows($result);

if ($num==1) {

 if ($name == 'admin') {

    $_SESSION['username'] = $name;

    header('location: home.php');       
    }

else {
	$_SESSION['username'] = $name;
	header('location: cart.php');
	}
}
else{

	echo '<script>alert("INCORRECT USERNAME or PASSWORT ! Please try again or create en account")</script>';
    echo '<script>window.location="login.php"</script>';
	//header('location: accueil.html');
}
?>

