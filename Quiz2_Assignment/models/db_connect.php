<?php
  $dbusername="root";
  $servername="localhost";
  $dbpassword="";
  $db_name="webtech";
  
  function execute($query){
    global $dbusername,$servername,$dbpassword,$db_name;
    $conn = mysqli_connect($servername,$dbusername,$dbpassword,$db_name);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_query($conn,$query);
  }
  function getArray($query){
    global $dbusername,$servername,$dbpassword,$db_name;
    $conn = mysqli_connect($servername,$dbusername,$dbpassword,$db_name);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $result = mysqli_query($conn,$query);
  $data = array();
  while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
  }
  return $data;
    
  }
  
  
  
?>