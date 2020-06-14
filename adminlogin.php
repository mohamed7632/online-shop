<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<style>
body  {
  background-image: url("images/white.JPEG");
  
}
</style>
<?php
 session_start();
 
?>


<div class="container py-5 w-50 m-auto">
<?php
	
	if(isset($_SESSION['error']) ){
		foreach($_SESSION['error'] as $error){
		  echo "<p style='color:red'>".$error."</p>";
		}
		unset($_SESSION['error']);
	}
	 if(isset($_SESSION ["isadmin"])){
		
		echo "<p style='color:red'>".$_SESSION ["isadmin"]."</p>";
	  unset($_SESSION ["isadmin"]);
     }

?>
<form  action="checklogin.php" method="post">

	<lable style='color:white'>email:</lable>
	<input name="email" type="text" class="form-control"/>
		<br/>
	
	<lable style='color:white'>password:</lable>
	<input name="password" type="password" class="form-control"/>
		<br/>
	<button class="btn btn-info"> Login</button>	
</form>
    </div>