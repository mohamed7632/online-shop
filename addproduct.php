<?php
include 'autoloader.php';



  //take inputs
  $name=$_POST['name'];
  $price=$_POST['price'];
  $des=$_POST['description'];
  $productimg=$_FILES['image'];
  $available=$_POST['available'];
  $calssification=$_POST['calssification'];
  
  
  $newImgName = 'images/uploads/'.rand(1,100).$productimg["name"];
  
  
  $product=new Product($name,$price,$des,$newImgName,$available,$calssification);
  
 $sqlQuery=new Myqueries;

 $sqlQuery->addProductQuery($product);
 move_uploaded_file($productimg['tmp_name'],$newImgName);
 header("location:allproducts.php");//must use session here