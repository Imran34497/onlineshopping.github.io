<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="styles/styles.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>
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
        <a class="nav-link " href="#">Login<span class="sr-only">(current)</span></a>
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
    <li class="breadcrumb-item active" aria-current="page">Cart</li>
	
  </ol>
</nav>
</div>
<div class="row "> <!--row start-->
<div class="col-lg-9 col-md-9 col-sm-12"><!--col-9 statr-->
<div class="card">
<form action="cart.php" method="POST" enctype="multipart-form-data">
<h1>Shopping Cart</h1>
<p class="text-muted">Currently You Have 3 items in your cart </p>
 <div class="table-responsive"> <!--table_responsive-->
 <table class="table">
 <thead>
   
   <tr>
   <th colspan="2">Product</th>
   <th>Quantity</th>
   <th>Unit Price</th>
   <th>Size</th>
   <th colspan="1">Delete</th>
   <th colspan="1">Sub Total</th>
   </tr>
 
 </thead>
 <tbody>
 <tr>
 <td><img src="product_images/j.jpg" style="width:100px; height:100px;"> </td>
 <td>Patala Cotton V-Neck Suit For Women</td>
 <td>2</td>
 <td>Rs 700</td>
 <td>Large</td>
 <td>Delete</td>
 <td>Rs 1400</td>
 </tr>
 <tr>
 <td><img src="product_images/j.jpg" style="width:100px; height:100px;"> </td>
 <td><p>Patala Cotton V-Neck Suit For Women</td>
 <td>2</td>
 <td>Rs 700</td>
 <td>Large</td>
 <td>Delete</td>
 <td>Rs 1400</td>
 </tr>
 
 </tbody>
 <tfoot>
 <tr>
 <th colspan="6">Total</th>
 <th colspan="2">Rs 2800</th>
 </tr>
 </tfoot>
 </table>
 </div> <!--table_responsive end-->
 <div class="pull-left">
 <a href="index.php" class="btn btn-primary">
 <i class="fa fa-chevron-left"></i>
 Continue Shopping
 
 </a>
 </div>
 <div class="pull-right">
 <a href="index.php" class="btn btn-success" type="submit" name="update">
 <i class="fa fa-refresh"></i>
 Update Cart
 </a>
 <a href="index.php" class="btn btn-primary">
 proceed to checkout
 <i class="fa fa-chevron-right"></i>
 
 </a>
 </div>
 
 

</form>
</div>
</div><!--col-9 End-->
<div class="col-lg-3 col-md-3 col-sm-12 "> <!--col 3 summary Start--->
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">Order Summary</h3>
    
    <p class="card-text text-muted">Shopping and additional costs are calculated based on the values you have entered.</p>
 <div class="table-responsive"><!--- table -->
 <table class="table">
 <tbody>

 <tr>
<td>Order Subtotal</td> 
<th>Rs 2800</th> 
 </tr>
 <tr>
<td>Shopping and Handling </td> 
<td>Rs 0</td> 
 </tr>
 <tr>
<td>Tax</td> 
<th>Rs 0</th> 
 </tr>
 <tr class="total">
<td>Total </td> 
<th>Rs 2800</th> 
 </tr>
 
 
 </tbody>
 </table>
 
 
 </div><!--- table End -->
  </div>
  </div>
</div><!--col 3 summary End --->
</div><!--row End-->
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