<?php
include '../connection.php';

 $iduser = $_GET['iduser'];
 $username = $_GET['username'];


 $select = $con->query("SELECT * FROM utilisateur WHERE iduser ='".$iduser."' AND username = '".$username."' ");
 $count = mysqli_num_rows($select);
 $newPass = rand(1111,99999);

 if($count == 1){
    $update = $con->query("UPDATE utilisateur SET password = '".$newPass."' WHERE iduser = '".$iduser."' AND username = '".$username."'");
    if($update){
        echo  json_encode($newPass);

    }
    
 }
 









?>
