<?php
    session_start();
    require_once('../bdfilms/connexion.inc.php');

    $titre=$_POST['name'];
    $director=$_POST['director'];
    $category=$_POST['category'];
    $duration=$_POST['duration'];
    $price=$_POST['price'];
	$id   = $_POST['id'];
    
    //$dossier="../img/";
    //$nomPochette=sha1($titre.time());
    $pochette="slide.jpg";
    if(isset($_FILES['pochette']['name']) && ($_FILES['pochette']['name']!=="")){
        //Upload de la photo
		$size=$_FILES['pochette']['size'];
        $tmp = $_FILES['pochette']['tmp_name'];
		$type=$_FILES['pochette']['type'];
        $fichier= $_FILES['pochette']['name'];
        //$extension=strrchr($fichier,'.');
		@unlink($tmp); //effacer le fichier temporaire
        @move_uploaded_file($tmp,'../img/$fichier');
        
        
     //   $pochette=$nomPochette.$extension;
    }
    $requete="INSERT INTO films values(0,?,?,?,?,?,?)";
    $stmt = $connexion->prepare($requete);
    $stmt->bind_param("ssssii", $fichier,$titre,$director,$category,$duration,$price);
    $stmt->execute();
    echo "<script>alert('Film ".$connexion->insert_id." is registered')</script>";
            echo '<script>window.location="listfilm.php"</script>';
    mysqli_close($connexion);
?>


