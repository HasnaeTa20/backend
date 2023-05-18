<?php
include '../connection.php';
if(isset($_POST['username'])){

$username = $_POST['username'];


$sqlQuer = " SELECT * FROM  utilisateur WHERE   username = '$username' ";

$result = $con->query($sqlQuer);

if($result->num_rows >0)
    {
       
        while($rowFound = $result->fetch_assoc())
        {
          
            $idData = $rowFound['iduser'];
            $userData = $rowFound['username'];
        }
        $url = 'http://'.$_SERVER['SERVER_NAME'].'/api_corpus/user/changepass.php?iduser='.$idData.'&username='.$userData;

        echo json_encode( $url);
   
    }
    else
    {
        echo json_encode("INVALIDE USER");
   }



}




?>