

<?php
include 'usernavbar.php' ;
include 'autoloader.php';
$category=$_GET['category'];
 $Myqueries=new Myqueries();
  $allproducts=$Myqueries->getProductsByCategory($category);
  //print_r($allproducts);

?>
<!DOCTYPE html>
<html lang="en">

<head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">

 <title>online shop</title>

 <!-- Bootstrap core CSS -->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
 <!-- Custom styles for this template -->
 <link href="css/business-frontpage.css" rel="stylesheet">
 <style>
body  {
  background-image: url("images/wood.JPEG");
}
</style>
</head>

<body>
 <br><br><br>
 <!-- Page Content -->
 <div class="container">


   <div class="row">
        <?php 
            foreach($allproducts as $products=>$data){
              ?>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
            <!-- photo -->
          
           
          <img width="200" hight="150"  src="<?php  echo  $data->imageDir ;?>" >

          <div class="card-body">
        
            <h4 class="card-title"><?php echo   $data->name;?></h4>
            <p class="card-title"><?php echo "<b>price</b>". $data->price;?></p>
            <p class="card-title"><?php echo "<b>description</b>". $data->description;?></p>
          </div>
          
          <div class="card-footer">
          <!-- <a href="singleproduct.php?myid='.$data->id.' " target="_blank"> -->
            <a  href="singleproduct.php?myid=<?php echo $data->id;?> " class="btn btn-primary" target="_blank">show </a>

          </div>
        </div>
      </div>
            <?php } ?>
  </div>
 </div>
 
 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
