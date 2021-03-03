<?php
class Common
{
    public function getAllRecords($connexion) {
        $query = "SELECT * FROM films";
        $result = $connexion->query($query) or die("Error in query1".$connexion->error);
        return $result;
    }

    public function deleteRecordById($connexion,$listeFilmsId) {
        $query = "DELETE FROM films WHERE id='$listeFilmsId'";
        $result = $connexion->query($query) or die("Error in query2".$connexion->error);
        return $result;
    }
}