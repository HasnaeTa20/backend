<?php
include '../connection.php'; 


 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];

  
 $sqlQuer = " INSERT INTO artiste SET nom = '$nom', prenom = '$prenom'";

    $result = $con->query($sqlQuer);
   echo json_encode(['success'=>$result]);
?>