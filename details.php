<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="styles/styles.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detail</title>
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
        <a class="nav-link " href="cusontomer_registration.php">Register <span class="sr-only">(current)</span></a>
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
    <li class="breadcrumb-item active" aria-current="page"><a href="shop.php">Shop</a></li>
	<li class="breadcrumb-item active" aria-current="page">detail</li>
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
<div class="col-lg-9 col-md-9 col-sm-12"> <!--col-9 start-->

     <div class="row "><!--products-->
	    
			<div class="col-lg-6 col-md-6 col-sm-12 "><!--col-lg-6 slider start-->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:400px; height:400px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="admin/product_images/3a.jpg" alt="First slide" style="width:450px; height:500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="admin/product_images/3a.jpg" alt="Second slide" style="width:450px; height:500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="admin/product_images/3a.jpg" alt="Third slide" style="width:450px; height:500px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      </div><!--col-lg-6 slider End-->

	  
<div class="col-lg-6 col-md-6 col-sm-12" style="width:300px; ">
	  <div class="card mr-1">
	 <h1 class="text-center">Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts For Men</h1>
<form action="detail.php" method="POST" class="form-horizontal mt-3 mr-5" style="align:center;">
<div class="row ml-2">
<label><b>Product Quantity</b></label>&nbsp&nbsp
<select class="form-control form-control-md" name="p_qty" style="width:160px;"  >

  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  
</select>
</div>
<div class="row mt-2 ml-5">
<label><b>Product Size</b></label>&nbsp
<select class="form-control" style="width:160px;">
  <option>Select a size</option>
  <option>Small</option>
  <option>Medium</option>
  <option>Large</option>
  <option>Extra Large</option>
  
</select>
</div>
<p class="text-center mt-4">

<button class="btn btn-primary ml-5">
<i class="fa fa-shopping-cart"></i>Add to cart
</button>
</p>
</form>

</div>
<div class="row mt-3 mr-2">
<div class="col-lg-4 col-md-4col-sm-12">
  <img src="admin/product_images/3a.jpg" alt="Card image cap" style="width:150px; height:180px;">
  
</div>
<div class="col-lg-4 col-md-4 col-sm-12">

  <img class="card-img-top" src="admin/product_images/3a.jpg" alt="Card image cap" style="width:150px; height:180px;">
  
</div>
<div class="col-lg-4 col-md-4 col-sm-12">

  <img class="card-img-top" src="admin/product_images/3a.jpg" alt="Card image cap" style="width:150px; height:180px;">
  
</div>
</div>	  





	   </div>
	   
			 
			 
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
