<?php
include '../connection.php'; 


 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $username = $_POST['username'];

 $email = $_POST['email'];
 //md5 secure password
 $password = md5($_POST['password']);//abc56 ==with md5 ==> bhfhj565Jkigk
//  $password = $_POST['password'];
 $role = 'UtilisateurInterne'; 
  
 $sqlQuer = " INSERT INTO utilisateur SET nom = '$nom', prenom = '$prenom' , username = '$username', email = '$email', password = '$password' , role='$role'";

    $result = $con->query($sqlQuer);
    if($result){
        echo json_encode(array("success"=>true));
    }
    else{
        echo json_encode(array("success"=>false));

    }

?>