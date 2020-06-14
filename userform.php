<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<style>
body  {
  background-image: url("images/white.JPEG");
}
</style>
<br>
<br>
<br>

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
