<!-- 
     
// if(isset($_POST['submit']) &&isset($_FILES['my_video'])  ){
//     include "../connection.php"; 
    // echo"<pre>";
    // print_r($_FILES['my_video']);
    // $video_name=$_FILES['my_video']['name'];
    // $tmp_name=$_FILES['my_video']['tmp_name'];
    // $error=$_FILES['my_video']['error'];
    // if($error===0){
    //     $video_ex=pathinfo($video_name,PATHINFO_EXTENSION);

    //     $video_ex_lc=strtolower($video_ex);

    //     $allowed_exs = array("mp4","webm","avi","flv");

        // if(in_array($video_ex_lc,$allowed_exs)){
        //    $new_video_name=uniqid("video-",true).'.'.$video_ex_lc;
        //    $video_upload_path= 'video/'.$new_video_name;
        //    move_uploaded_file($tmp_name,  $video_upload_path);
        //    //now let's insert the video path into database
        //    $sql="INSERT INTO media(media_url)VALUES ('$new_video_name')";
        //    mysqli_query($con,$sql);
        //    header("Location:view.php");

    //     }else{
    //         $em="you can't upload files of this type";
    //         header("Location:index.php?error=$em");
    //     }
    // }

// }else{
//     header("Location:index.php");
// }
 -->



<?php 
include '../connection.php'; 

if(
    // isset($_POST['submit']) &&
isset($_FILES['my_video'])  ){
    $myVideo = $_FILES['my_video']['name'];
    $myVideoTmpName = $_FILES['my_video']['tmp_name'];
    // var_dump($myVideo);
    $newFileName=substr($myVideo,0,(strrpos($myVideo,".")));
    var_dump($newFileName);

    $uploadFolder = "uploads/".$myVideo;

    move_uploaded_file($myVideoTmpName,$uploadFolder);

    $upload = "INSERT INTO media (media_url,media_name) VALUES 
    ('$myVideo','$newFileName')";
    $result = $con->query($upload);
    // header("Location:view.php");
   

    }
    ?>