<?php
require_once '../controllers/dashboard.php';
$users = getAllUsers();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
<div class="container">


    <h1>Welcome to Webtech</h1>
    <p>All user data</p>


    <div class="center">
    	<table class="table table-striped" border="1">
    		<thead>
    			<th>Name</th>
    			<th> Username</th>
    			<th>Email </th>
                <th>Phone </th>
    		</thead>
    		<tbody>
    			<?php

    			foreach ($users as $key) {
    				echo '<tr>';
    				echo '<td> '.$key["name"].'</td>';
                    echo '<td> '.$key["username"].'</td>';
                    echo '<td> '.$key["email"].'</td>';
                    echo '<td> '.$key["phone"].'</td>';
                    echo '</tr>';
    			}

    			 ?>
    		</tbody>
    	</table>
    </div>
    </div>

  </body>
</html>
