<?php

include '../connection.php'; 
if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['prenom'])){

$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];


$sqlQuer = "UPDATE artiste SET nom = '$nom', prenom = '$prenom' WHERE id = '$id' ";

$result = $con->query($sqlQuer);
  if($result){
   $data=[
    'success'=>true,
    'message'=>'user update successfully'
   ];
   }else{
    $data=[
        'success'=>false,
        'message'=>'user updating failed'
       ];
   } 
   echo json_encode($data);

}else{
    $data=[
        'success'=>false,
        'message'=>'error'
       ];
       echo json_encode($data);
}

?>






