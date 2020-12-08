<?php 
require_once"../controllers/usercontroller.php";

?>

<div class="center-login">
     <h1 class="text text-center">Sign Up</h1>
     <fieldset id="register_form" >
      <h1>Welcome to Registration.</h1>
       <script src="../js/validateuser.js"></script>
          <form action="" method="post" onsubmit="return validateform()" name="registerform"   >
          <div class="form-group">
               
               <h4 class="text">Name</h4> 
               <input type="text" name="name" class="form-control">
               <span style="color:red;">*<?php echo $err_name;?></span><span id="name_error">  
          </div>
          <div class="form-group">
               <h4 class="text">Username</h4> 
               <input type="text" name="username" class="form-control">
               <span style="color:red;">*<?php echo $err_username;?></span><span id="username_error">
          </div>
          <div class="form-group">
               <h4 class="text">Password</h4> 
               <input type="password" name="password" class="form-control">
               <span style="color:red;">*<?php echo $err_password;?></span><span id="password_error">
          </div>         
          <div class="form-group">
               <h4 class="text">Email</h4> 
               <input type="text" name="email" class="form-control">
               <span style="color:red;">*<?php echo $err_email;?></span>
          </div>
          
          <div class="form-group">
               <h4 class="text">Phone</h4> 
               <input type="text" name="contact" class="form-control">
               <span style="color:red;">*<?php echo $err_contact;?></span><span id="number_error">
          </div>
          <div class="form-group text-center">
               
               <input type="submit" class="btn btn-success" name="Register" value="Sign Up" class="form-control">
          </div>
</div>
