<?php include 'main_header.php';
 require_once '../controllers/user_controller.php';
?>

<script src="js/validate_login.js"></script>

<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<form action="" method="post" class="form-horizontal form-material" name="loginform" onsubmit="return validateform()" >
		<div class="form-group">
			<h4 class="text">Username</h4>
			<input type="text" name="username" class="form-control">
        <span style="color:red"> <?php echo $error_username; ?> </span>
        <span> <p id="username_error"></p> </span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4>
			<input type="password" name="password" class="form-control">
        <span style="color:red"> <?php echo $error_password; ?> </span>
         <span> <p id="password_error"></p> </span>
		</div>
		<div class="form-group text-center">

			<input type="submit" class="btn btn-danger" value="login" name="login" class="form-control">
		</div>
		<div class="form-group text-center">

		
		</div>
</div>


<?php include 'main_footer.php';?>
