
<div style="width: 18rem;">
  <img src="customer_imgs/mani.jpg" alt="Card image cap" style="width:200px;
  height:250px;">
  <div>
    <h5 class="card-title">Name: Sahil Hogan</h5>
  </div>
  
  <div class="nav">
  <ul > 
  <li style="list-style:none;" class="<?php if(isset($_GET['my_order'])){echo"active";} ?>">
  <a href="my_account.php?my_order">
  <i class="fa fa-list"></i>My Order</a>
  </li>
  <li style="list-style:none;" class="<?php if(isset($_GET['pay_offline'])){echo"active";} ?>">
  <a href="my_account.php?pay_offline">
  <i class="fa fa-bolt"></i> Pay Offline </a>
  </li>
   <li style="list-style:none;" class="<?php if(isset($_GET['edit_account'])){echo"active";} ?>">
  <a href="my_account.php?edit_account">
  <i class="fa fa-pencil"></i> Edit Account </a>
  </li>
   <li style="list-style:none;" class="<?php if(isset($_GET['c_password'])){echo"active";} ?>">
  <a href="my_account.php?c_password">
  <i class="fa fa-user"></i>Change Password </a>
  </li>
   
   <li style="list-style:none;" class="<?php if(isset($_GET['del_act'])){echo"active";} ?>">
  <a href="my_account.php?del_act">
  <i class="fa fa-"></i>Delete Account </a>
  </li>
   <li style="list-style:none;" class="<?php if(isset($_GET['logout'])){echo"active";} ?>">
  <a href="my_account.php?logout">
  <i class="fa fa-sign-out"></i> Logout </a>
  </li>
  
  </ul>
  
     </div>
    
</div>


