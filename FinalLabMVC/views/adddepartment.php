<?php include 'admin_header.php';
require_once '../controllers/department_controller.php';
?>

	<div class="center">
		<form class="form-horizontal form-material" method="post" action="">
			<div class="form-group">
				<h4 class="text">Name:</h4>
				<input type="text"  name="name" class="form-control">
				<span style="color:red"> <?php echo $error_name; ?> </span>
			</div>

			<div class="form-group text-center">

				<input type="submit" class="btn btn-success" value="Add Department" name="adddepartment" class="form-control">
			</div>
		</form>
	</div>


<?php include 'admin_footer.php';?>
