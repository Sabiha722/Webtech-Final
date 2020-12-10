<?php
require_once '../models/db_connect.php';
$name = $error_name = "";
$has_error =false;
function getAllDepartments(){
  $query = "select * from department";
  return get($query);
}
function addDepartment($n ){

  $query =  "INSERT INTO department VALUES (0,'$n' );" ;

  execute($query);
}
if (isset($_POST['adddepartment']))

{
  if(empty($_POST["name"])){
    $error_name="*Name required";
    $has_error =true;
  }
  else{
    $name = htmlspecialchars($_POST["name"]);
  }
  if(!$has_error){
    adddepartment($name);
  }
}
 ?>
