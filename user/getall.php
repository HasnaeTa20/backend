<?php
include '../connection.php'; 

$sqlQuer = "SELECT *  FROM utilisateur ";
$result = $con->query($sqlQuer);

$arr = array();

if ($result !== false && $result->num_rows > 0)
{
 
    while($rowFound = $result->fetch_assoc())
    {
        $arr[] = $rowFound; 
    }

    echo json_encode($arr);
}

   
   ?>