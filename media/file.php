<?php
include '../connection.php'; 
 $result =$conn->query("SELECT * FROM media orderby id DESC");
 $list =array();
 if($result){
    while($row=mysqli_fetch_assoc($result)){
        $list[]=$row;
    }
    echo json_encode($list);
 }






 
<?php 
include '../connection.php'; 

if(isset($_POST['UploadVideo']) && isset($_FILES['my_video']['name'])){
    $myVideo = $_FILES['my_video']['name'];
    $myVideoTmpName = $_FILES['my_video']['tmp_name'];
    // var_dump($myVideo);
    $newFileName=substr($myVideo,0,(strrpos($myVideo,".")));
    var_dump($newFileName);

    $uploadFolder = "video/".$myVideo;

    move_uploaded_file($myVideoTmpName,$uploadFolder);

    $upload = "INSERT INTO media (uploadfile,nom) VALUES 
    ('$myVideo',$newFileName)";
    $result = $con->query($sqlQuer);
    if($result){
        echo "upload Success";
    }else{
        echo "upload Faild".mysqli_error($con);
     }
}

?>
















<?php
include '../connection.php'; 


$video_name=$_FILES['my_video']['name'];
$tmp_name=$_FILES['my_video']['tmp_name'];

// $error=$_FILES['my_video']['error'];
// if($error===0){

    $video_ex=pathinfo($video_name,PATHINFO_EXTENSION);

    $video_ex_lc=strtolower($video_ex);

    $allowed_exs = array("mp4","webm","avi","flv");

    if(in_array($video_ex_lc,$allowed_exs)){
       $new_video_name=uniqid("video-",true).'.'.$video_ex_lc;
       $video_upload_path= 'video/'.$new_video_name;
       move_uploaded_file($tmp_name,  $video_upload_path);
       //now let's insert the video path into database
       $sql="INSERT INTO media(media_url)VALUES ('$new_video_name')";
       $result= mysqli_query($con,$sql);
    //    header("Location:view.php");
    if($result){
        echo json_encode("upload Success");
    }

    }else{
        // $em="you can't upload files of this type";
        // header("Location:index.php?error=$em");
        echo json_encode ("you can't upload files of this type");
    }


// }else{
// header("Location:index.php");
// }


   

   
//     $upload=$con->query("INSERT INTO media (uploadfile,nom) VALUES ('$video',$newFileName)");
//     if($upload){
//         echo json_encode("upload Success")

//     }else{
//         echo json_encode ("upload Faild".mysqli_error($con));

//     }
?>





