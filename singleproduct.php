<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<?php
  session_start();
  include 'autoloader.php';
   $value="add to chart";
    $link="singleproduct.php";
    $buttoncolor="primary";
    
    
    $Myqueries=new Myqueries();
    //add to cart button
    //$arr=array();
    
    
    
    if(isset($_GET['id'])){
      
      array_push( $_SESSION['cart'], $_GET['id']);
      
      $value="view in chart";
      $link="cart.php";
      $buttoncolor="dark";
    }
    //take inputs
    if(isset($_GET['myid'])){
    $id=$_GET['myid'];
    $_SESSION['myid']=$id;
    $product=$Myqueries->showProductById($id);
    }
    else{
      $product=$Myqueries->showProductById($_SESSION['myid']);
    }
  
?>

<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css"> 
    <style>
body  {
  background-image: url("images/wood.JPEG");
}
</style>
<div class="card mb-3" style="max-width: 800px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $product->imageDir;?>" class="card-img " alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo  $product->name;?></h5>
        <p class="card-text"><?php  echo "price  ".  $product->price;?></p>
        <p class="card-text"><?php echo "available ". $product->quantityAvailabel;?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
       <!-- <form action="singleproduct.php" method="get" > <button type="submit" name="add" class="btn btn-primary"> add to cart</button></form> -->
       
       <a href="<?php echo $link?>?id=<?php echo $product->id;?> " class="btn btn-<?php echo  $buttoncolor?>" target="_self" ><?php echo $value ?></a>
       <a href="userorder.php" class="btn btn-primary" target="_blank" >Buy it now</a>
      </div>
    </div>
  </div>
</div>
