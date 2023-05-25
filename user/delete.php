<?php
include '../connection.php';

if(isset($_POST['id'])){ 

$id =  $_POST['id'];

$sqlQuer = " DELETE FROM utilisateur WHERE id = '$id' ";

$result = $con->query($sqlQuer);
if($result){
    $data=[
        'success'=>true,
        'message'=>'user deleted successfully'
       ];
}else{
    $data=[
        'success'=>false,
        'message'=>'user deleting failed'
       ];
} echo json_encode($data);

}
else{
    $data=[
        'success'=>false,
        'message'=>'error'
       ];
       echo json_encode($data);
}

?>