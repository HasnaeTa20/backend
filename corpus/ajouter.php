<?php
include '../connection.php'; 


if(isset($_POST['idcorpus']) && isset($_POST['categorie']) && isset($_POST['motcle'])
&& isset($_POST['titre'])&& isset($_POST['datecreation'])
&& isset($_POST['idrapporteur'])&& isset($_POST['idmedia'])){

   $idcorpus=$_POST['idcorpus'];
   $categorie = $_POST['categorie'];
   $motcle = $_POST['motcle'];
   $titre = $_POST['titre'];
   $datecreation = $_POST['datecreation'];
   $datecreation = $_POST['datecreation'];
   
  
   

   $sqlQuer = "INSERT INTO nouveaucorpus (idcorpus, categorie, motcle,titre,datecreation) VALUES ('$idcorpus','$categorie','$motcle','$titre','$datecreation')";
   $result = $con->query($sqlQuer);
    if($result){
      $data=[
         'success'=>true,
         'message'=>'art added successfully'
      ];
    }else{
      $data=[
         'success'=>false,
         'message'=>'art adding failed'
      ];

    } echo json_encode($data);
  

}else{
   $data=[
      'success'=>false,
      'message'=>'error'
   ];
   echo json_encode($data);

}

  


   
  
?>