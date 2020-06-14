<?php
 session_start();
include 'autoloader.php';
 //if(isset($_SESSION['update'] )){
    $id = $_SESSION['update'] ;
 //}
 
//include 'navbar.php' ;
 $Myqueries=new Myqueries;
 $validaion=new validation;
 //take inputs

 $name=$_POST['name'];
  $price=$_POST['price'];
  $des=$_POST['description'];
  $productimg=$_FILES['image'];
  $available=$_POST['available'];
  $calssification=$_POST['calssification'];
  
  $newImgName = 'images/uploads/'.rand(1,100).$productimg["name"];
  //check if inputs is empty
     $emptyName=$validaion->checkInput($name);
     $emptyPrice=$validaion->checkInput($price);
     $emptyDes=$validaion->checkInput($des);
     $emptyImg=$validaion->checkInput($productimg);
     $emptyQuantity=$validaion->checkInput($available);
     $emptyCalssification=$validaion->checkInput($calssification);
     
      //check if inputs have not valid data
      $name=$validaion->cleanInput($name);
      $price=$validaion->cleanInput($price);
      $des=$validaion->cleanInput($des);
      //$productimg=$validaion->cleanInput($productimg);
      $available=$validaion->cleanInput($available);
      $calssification=$validaion->cleanInput($calssification);
      //$productimg=$validaion->cleanInput($productimg);

    $_SESSION['error']=array();
    if($emptyName|| $emptyPrice||$emptyDes|| $emptyImg||$emptyQuantity||$emptyCalssification){
      $_SESSION['error']['empty']="<b>please fill all inputs</b>";
      header("location:updateform.php");
    }
    else{
      $product=new Product($name,$price,$des,$newImgName,$available,$calssification);
      
      //unset session
      unset($_SESSION['update']);
      $Myqueries->updateProduct($id,$product);
      //move the image from its temp file on server to another on my pc
      move_uploaded_file($productimg['tmp_name'],$newImgName);
       header("location:allproducts.php");
    }
  

 