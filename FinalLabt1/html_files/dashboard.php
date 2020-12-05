<!DOCTYPE html>

<?php include_once "../php_files/redirect_login.php" ;?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
      <link rel="stylesheet" href="../css_files/dashboard.css"></head>
  </head>
  <body>
    <div class="container">
  <img src="../resource_files/headerlogo1.jpg" alt="background_header">
  <div class="centered"><h1>Book Store</h1></div>
</div>

<table id="book_table" border="1" class="container">

<tr>
    <th> SerialNo </th>
      <th> Name </th>
        <th> Email  </th>
          <th>Update </th>
            <th> Delete </th>
 </tr>
  <?php

  $con = mysqli_connect("localhost","root","","webtech");

 // Checking connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }


  $query = 'select username, email, type from sample;';


  $ans = mysqli_query($con, $query);
  if (mysqli_num_rows($ans)>0){
    $i = 1 ;

        while($val = mysqli_fetch_assoc($ans)){
          echo "<tr>";
            echo "<td> " .$i ."</td>";
          echo "<td> " .$val["username"] ."</td>";
            echo "<td> " .$val["email"] ."</td>";
              echo '<td><a href="#">Edit </a></td>';
              echo '<td><a href="#"> Delete</a></td>';

          echo "</tr>";
          $i = $i + 1 ;
        }

   }

   ?>
 
 </table>
</body>
</html>
