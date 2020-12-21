<?php include 'admin_header.php';
require_once '../controllers/student_controller.php';
require_once '../controllers/department_controller.php';
$departments = getAllDepartments();
?>

<div class="center">

	<form action="" method="post" onsubmit="return validateform()" name="registerform"   >
		<table>
			<tr>
			<td style="text-align: left;"> Name: </td>
			<td style="text-align: left;"><input type="text" name="name" > <span id="name_error"> </td>
			</tr>
			<tr>
			<td style="text-align: left;"> Date Of Birth:</td>
			<td style="text-align: left;"><input type="text" name="dob"  > </span> <span id="username_error"> </td>
			</tr>
			<tr>
			<td style="text-align: left;"> Credit:</td>
			<td style="text-align: left;"><input type="text" name="credit" > </span> <span id="password_error"></td>
			</tr>

			<tr>
			<td style="text-align: left;">CGPA:</td>
			<td style="text-align: left;"><input type="cgpa" name="cgpa"  > </span> <span id="email_error"></td>
			</tr>
			<tr>
				<td>Dept:</td>
				<td>
								<select class="form-control" name="dept">
									<option>Choose</option>
									<?php
									foreach ($departments as $key) {
										echo '	<option value='.$key["id"] .'>'.$key["name"] .'</option>';
										
									}
									 ?>
								</select> </td>
			</tr>

			<tr>
			<td  align="left">
			<input type="submit" name="addstudent" value="Register">
			</td>
			</tr>
		</table>
	</form>

</div>
<?php include 'admin_footer.php';?>
