
<?php
include 'autoloader.php';
 $productId= $_GET['myid'];
 $sqlQuery=new Myqueries;
 $sqlQuery->deleteProduct($productId);
 header("location:allproducts.php");