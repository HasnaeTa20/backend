<?php 
include '../connection.php'; 


    $myVideo = $_FILES['my_video']['name'];
    $myVideoTmpName = $_FILES['my_video']['tmp_name'];
    // var_dump($myVideo);
    $newFileName=substr($myVideo,0,(strrpos($myVideo,".")));
    var_dump($newFileName);

    $uploadFolder = "video/".$myVideo;

    move_uploaded_file($myVideoTmpName,$uploadFolder);

    $upload = "INSERT INTO media (media_url,media_name) VALUES 
    ('$myVideo','$newFileName')";
    $result = $con->query($sqlQuer);
    if($result){
        echo  json_encode ("upload Success");
    }else{
        echo json_encode ("upload Faild".mysqli_error($con));
     }

