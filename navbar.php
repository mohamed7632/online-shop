<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<?php
 session_start();

if(isset($_SESSION ["email"])){
    $email=$_SESSION ["email"];
    $email=substr( $email,0,7);
  }
		?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="adminhome.php">online shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="adminhome.php">Home
              <span class="sr-only">(current)</span>
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="allproducts.php"> products</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="addproductform.php">Add product</a>
          </li>
          <li class="nav-item">
           <!-- <a class="nav-link" href="#"><i class="fas fa-user"></i>'."$admin".'</a>';?> -->
            <a class="nav-link" href="#"><?php echo  $email?></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
