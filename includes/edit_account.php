<div class="card">
<center>
	<h1>Edit Your Accounnt</h1>
</center>
	<form action="confirm.php" method="POST" enctype="multipart/form-data"> 
	<div class="ml-3 mr-3">
	<div class="form-group">
	<label>Customer Name</label>
	<input type="text" name="c_name" class="form-control" REQUIRED>
	</div>
	<div class="form-group">
	<label>Customer Email</label>
	<input type="email" name="c_email" class="form-control" REQUIRED>
	</div>
	<div class="form-group">
	<label>Customer Password</label>
	<input type="password" name="c_password" class="form-control" REQUIRED>
	</div>
	<div cl
	<div class="form-group">
	<label>Customer Country</label>
	<input type="text" name="c_country" class="form-control" REQUIRED>
	</div>
	<div class="form-group">
	<label>Customer City</label>
	<input type="text" name="c_city" class="form-control" REQUIRED>
	</div>
	<div class="form-group">
	<label>Contact Number</label>
	<input type="number" name="c_number" class="form-control" REQUIRED>
	</div>
	<div class="form-group">
	<label>Customer Address</label>
	<input type="text" name="c_address" class="form-control" REQUIRED>
	</div>
	<div class="form-group">
	<label>Customer Image</label>
	<input type="file" name="c_img" class="form-control" REQUIRED>
	<img src="customer_imgs/mani.jpg" style="height:100px; width:100px;">
	</div>
	<div class="text-center mb-2">
	<button type="submit" name="submit" class="btn btn-success btn-lg">Update Now</button>
	</div>
	</div>
	
	
	</form>
    </div>