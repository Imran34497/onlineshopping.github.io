<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="styles/styles.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shop</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid"><!--container-fluid-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
 <div class="ml-5"> <a class="btn btn-success btn-sm" href="#">Welcome Guests</a>
  <a href="#">Shopping Cart Total Price:$500,Total Items 2</a></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-5">
      <li class="nav-item active">
        <a class="nav-link " href="customer_registration.php">Register <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link " href="my_account.php">My Account<span class="sr-only">(current)</span></a>
      </li> <li class="nav-item active">
        <a class="nav-link " href="cart.php">Goto Cart<span class="sr-only">(current)</span></a>
      </li> <li class="nav-item active">
        <a class="nav-link " href="login.php">Login<span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand col-lg-1 col-md-1 col-sm-12" href="#"><img src="images/q.jpg" alt="..." class="img-thumbnail"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent ">
 <ul class="navbar-nav mr-auto ml-5 text-capitalize ">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="shop.php">Shop <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="my_account.php">My Account <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="cart.php">Shopping Cart <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php"> About Us <span class="sr-only">(current)</span></a>
        <li class="nav-item active">
        <a class="nav-link" href="services.php">Services<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contactus.php">Contact Us <span class="sr-only">(current)</span></a>
      </li>
</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
   
   
  </div>
   <a href="#" class="btn btn-success ml-2" >
     <i class="fa fa-shopping-cart"></i>
     <span>4 items in cart</span>
     </a>
       </nav>
	   
<div>	   
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-dark">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Shop</li>
  </ol>
</nav>
</div>

<div class="row">
<div class="col-lg-3 col-md-3 col-sm-12">
<!--Sidebar-->
<?php 
include ('includes/sidebar.php');
?>
<!-- sidebar end-->
</div>
<div class="col-lg-9 col-md-9 col-sm-12 "> <!--col-9 start-->
<div class="card">
  <div class="card-body">
  <h3>Shop</h3>
  <p>  This theme is created by Imran Mushtaq, who is a Magento Developer</p>
  </div>
  </div>
     <div class="row mt-3"><!--products-->
	    <div class="col-lg-4 col-md-4 col-sm-6">
		<div class="card" style="width: 18rem;">
  <img class="card-img-top img-fluid" src="admin/product_images/3a.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts For Men</h5>
    <a href="details.php" class="btn btn-primary">Details</a>
	<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i>Add to cart</a>
  </div>
</div>

		   
			 
			 
			 </div>
			 <div class="col-lg-4 col-md-4 col-sm-6">
		<div class="card" style="width: 18rem;">
  <img class="card-img-top img-fluid" src="admin/product_images/3a.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts For Men</h5>
    <a href="details.php" class="btn btn-primary">Details</a>
	<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i>Add to cart</a>
  </div>
</div>

		   
			 
			 
			 </div>
<div class="col-lg-4 col-md-4 col-sm-6">
		<div class="card" style="width: 18rem;">
  <img class="card-img-top img-fluid" src="admin/product_images/3a.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts For Men</h5>
    <a href="details.php" class="btn btn-primary">Details</a>
	<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i>Add to cart</a>
  </div>
</div>

		   
			 
			 
			 </div>
 <div class="col-lg-4 col-md-4 col-sm-6 mt-2">
		<div class="card" style="width: 18rem;">
  <img class="card-img-top img-fluid" src="admin/product_images/3a.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts For Men</h5>
    <a href="details.php" class="btn btn-primary">Details</a>
	<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i>Add to cart</a>
  </div>
</div>

		   
			 
			 
			 </div>
			 <div class="col-lg-4 col-md-4 col-sm-6 mt-2">
		<div class="card" style="width: 18rem;">
  <img class="card-img-top img-fluid" src="admin/product_images/3a.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts For Men</h5>
    <a href="details.php" class="btn btn-primary">Details</a>
	<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i>Add to cart</a>
  </div>
</div>

		   
			 
			 
			 </div>
	<div class="col-lg-4 col-md-4 col-sm-6 mt-2">
		<div class="card" style="width: 18rem;">
  <img class="card-img-top img-fluid" src="admin/product_images/3a.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts For Men</h5>
    <a href="details.php" class="btn btn-primary">Details</a>
	<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i>Add to cart</a>
  </div>
</div>

		   
			 
			 
			 </div>
			 <!--pagination-->
	 <center> 
  <ul class="pagination mt-2 mr-5">
    <li class="page-item">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item">
      <a class="page-link" href="#">2 </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#">4</a></li>
	<li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul> </center>
 


<!--pagination End--> 
			 
		             </div><!--row of product End-->
					
	  
 
		   
	    </div><!--col-9 End-->
		
     </div> <!--row end-->
	 
	 
	 
</div><!--container-fluid End-->

	   

	   <!---footer-->
<div class="col-lg-12 col-md-12 col-sm-12">
<?php 
include("includes/footer.php");
?>
</div>
  <!---End footer-->
  
 
</body>
</html>
