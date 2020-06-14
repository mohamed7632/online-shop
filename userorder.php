<?php
session_start();
include 'autoloader.php';
 $Myqueries=new Myqueries;
 if(isset($_GET['prid'])){
	// unset($_SESSION['cart']);
	$remove_item=$_GET['prid'];
	$index = array_search($remove_item,$_SESSION["cart"]);
	
	
	unset($_SESSION['cart'][$index]);
 }
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


	
<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
			
					<table>
				
					
						<thead>
							<tr class="table100-head">
								<th class="column1">product name</th>
								<th class="column2">product price</th>
								<th class="column3">description</th>
								<th class="column4">classification</th>
								<th class="column5">remove</th>
							
							</tr>
						</thead>
						<?php
					if(isset($_SESSION['cart'])){
						 
						 foreach($_SESSION['cart'] as $value){
							$product =$Myqueries->showProductById($value);
											?>
					  
						<tbody>
								<tr>
									<td class="column1"><?php echo $product->name; ?></td>
									<td class="column2"><?php echo $product->price; ?></td>
									<td class="column3"><?php echo $product->description; ?></td>
									<td class="column4"><?php echo  $product->classification; ?></td>
									<td class="column5"><a href="userorder.php?prid=<?php echo $product->id; ?>">remove</a></td>
									
								</tr>
					
								
                        </tbody>
						<?php }
              					  }
          					 ?>

					</table>
					<div class="container py-5 w-25 m-auto">
<form  action="order.php" method="post"enctype="multipart/form-data">

	
	<input name="name" type="text" class="form-control" placeholder="enter your  name"/>
		<br/>
	<input name="email" type="email" class="form-control" placeholder="enter your email"/>
		<br/>
    <input name="phone" type="text" class="form-control" placeholder="enter your phone number"/>
		<br/>
	<input name="address" type="text" class="form-control" placeholder="enter your address"/>
		<br/>
      
    
    <button class="btn btn-info"> send order </button>
    
</form>
                                </div>
				</div>
			</div>
        </div>
    
	</div>

	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

    </body>
    


	
</html>
