<?php

include '../connection.php'; 
if(isset($_POST['id']) && isset($_POST['role']) && isset($_POST['role'])){

$id = $_POST['id'];
$role= $_POST['role'];
$status = $_POST['status'];


$sqlQuer = "UPDATE utilisateur SET role = '$role', status = '$status' WHERE id = '$id' ";

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






