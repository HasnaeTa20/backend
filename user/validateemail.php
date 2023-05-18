<?php
include '../connection.php';

$email = $_POST['email'];
$sqlQuer = " SELECT * FROM utilisateur WHERE email = '$email'";

//if the columne emailuser containe the  emailUser typed 

$result = $con -> query($sqlQuer);

if($result-> num_rows > 0){
    //num rows length == 1  email already in someone else use--- Error
    echo json_encode(array("emailfound"=>true));
}
else{
    //num rows == 0  email  is not already in someone else 
    // a user will allowed to signup successfully
    echo json_encode(array("emailfound"=>false));
}


// 01    |   hasnae          | hasnae@gamil.com | dhvbndszdxk

//Error this email is already used
// 02    |   hasnae tabassi  | hasnae@gamil.com | dhvbndszdxkmlkjlxssqwx

