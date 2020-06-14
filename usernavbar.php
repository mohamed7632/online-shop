<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="home.php">online shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
         
          <li class="nav-item dropdown"> 
      <a class="nav-link dropdown-toggle" href="userallproducts.php" id="navbarDropdown" 
      role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              allproducts
              </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="userallproducts.php">All</a>
          <a class="dropdown-item" href="singlecategory.php?category=pc">pc</a>
          <a class="dropdown-item" href="singlecategory.php?category=labtob">labtop</a>
          <a class="dropdown-item" href="singlecategory.php?category=mobile">mobile</a>
         
        </div>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="cart.php"> <img width="30" hight="30" src="images/newcart.PNG"></a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
