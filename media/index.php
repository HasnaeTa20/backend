<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>
    <style>
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            min-height: 100vh;
        }
        input{
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_GET['error'])){?>
    <p><?=$_GET['error']?></p>
    <?php
    }
    ?>
<form action="up.php" 
          method="post"
          enctype="multipart/form-data">
     
                            <input type="file" 
                            name="my_video">

                            <input type="submit" 
                             name="submit"
                             value="Upload "
                             
                              >
                            
                    </form>
    
</body>
</html>




           
             

        
        <!-- <div class="container">
            <hr>
            <h1 class="text-center">Upload video</h1>
            <hr>
            <div class="panel-body" style="min-height:430px;">
             <div class="row">
              <div style="padding-left:10px;padding-right:10px" class="col-md-6">
                 <div id="register_form_area">
                    <form id="upload_form" action="" method="POST" enctype="multipart/from-data">
                         <h3>upload your video</h3> -->
                        <!-- <div class="profile-image-update">
                            <input style="background-color: gray;width: px;" type=file id="my_video" name="my_video" required="">
                            <div>
                            <button type= submit id="UploadVideo" style="width: 200px;" class="btn btn-danger" name="UploadVideo">Upload Video</button><div>
                        </div>
                    </form>
                 </div>
             </div>
            </div>   
        </div>  
         </div>  
         <div class="container">
            <div class="panel-footer">
                <a href="">dev</a>
            </div> 
         </div>     
     </body> 
    </html>   -->
