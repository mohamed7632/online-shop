<?php
 session_start();
 if(isset($_GET['myid']))
 $_SESSION['update'] = $_GET['myid'];
 ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<style>
body  {
  background-image: url("images/white.JPEG");
}
</style>

<div class="container py-5 w-25 m-auto">
<?php
  if(isset( $_SESSION['error']['empty']))
    
    echo "<p style='color:red'>".$_SESSION['error']['empty']."</p>";
    unset( $_SESSION['error']['empty']);
 
?>

<form  action="updateproduct.php" method="post"enctype="multipart/form-data">

	
	<input name="name" type="text" class="form-control" placeholder="enter product name"/>
		<br/>
	<input name="price" type="number" class="form-control" placeholder="enter product price"/>
		<br/>
    <input name="description" type="text" class="form-control" placeholder="enter product description"/>
	
   
    <!-- <input name="calssification" type="text" class="form-control" placeholder="enter product calssification"/> -->
		<br/>
	<input name="available" type="number" class="form-control" placeholder="enter product quantity available"/>
		<br/>
      
       <input   type="file" name="image" accept="image/*">
		<br/>
        <br/>
		
  <select  class="btn btn-danger dropdown-toggle" id="calssification" name="calssification">
     <option value="calssification"selected>calssification</option>
    <option value="labtob">labtob</option>
    <option value="pc">pc</option>
    <option value="mobile">mobile</option>
    
  </select>

   
    <br/>
    
    <br/>
    <button class="btn btn-info"> update </button>
    
</form>
