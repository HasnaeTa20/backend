<?php
include '../connection.php'; 



 $username = $_POST['username'];
//  $password = md5($_POST['password']);
 $password = $_POST['password'];


  
 $sqlQuer = " SELECT * FROM  utilisateur WHERE   username = '$username' AND password = '$password' ";

    $result = $con->query($sqlQuer);

    if($result->num_rows >0)//allow user to login
    {
        $userRecord = array();
        while($rowFound = $result->fetch_assoc())
        {
            $userRecord[] = $rowFound; 
        }

        echo json_encode(
            array(
            "success"=>true,
            "userData"=>$userRecord[0],
    ));
    }
    else
    {//don't allow user to login
        echo json_encode(array("success"=>false));
   }

?>