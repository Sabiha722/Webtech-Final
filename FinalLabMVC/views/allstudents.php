<?php include 'admin_header.php';
require_once '../controllers/student_controller.php';
$students  = getAllStudents();
?>
<div class="center">
	<h3 class="text">All Students</h3>
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Name</th>
			<th>CGPA </th>
			<th>DOB</th>
			<th>CREDIT</th>
			<th>DEPT</th>
     </thead>

        <tbody>
			<?php

			foreach ($students as $key) {
						echo '<tr>';
								echo '<td> '.$key["id"].'</td>';
								echo '<td> '.$key["name"].'</td>';
								echo '<td> '.$key["cgpa"].'</td>';
								echo '<td> '.$key["dob"].'</td>';
								echo '<td> '.$key["credit"].'</td>';
								echo '<td> '.$key["dept"].'</td>';
								echo '<td><a href="editstudent.php" class="btn btn-success" >Edit</a> </td>';
								echo '<td><a href="deletestudent.php" class="btn btn-danger" >Delete</a> </td>';
						echo '</tr>';
			}

			 ?>
		</tbody>
	</table>
</div>
<?php include 'admin_footer.php';?>
