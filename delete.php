<?php
	require_once("../bdfilms/connexion.inc.php");
	include_once "Common.php";
	//$requete="DELETE FROM films WHERE name=$listeFilmsName";
	if (isset($_GET['listeFilmsId'])){
    $recordId = $_GET['listeFilmsId'];
    $common = new Common();
    $delete = $common->deleteRecordById($connexion,$recordId);
    if ($delete){
        echo '<script>alert("Product is DELETED")</script>';
        echo '<script>window.location="listfilm.php"</script>';
    }
}
	mysqli_close($connexion);
	
?>


