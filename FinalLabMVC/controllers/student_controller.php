<?php
require_once '../models/db_connect.php';
	$name = $error_name = $dob = $error_dob = $credit = $error_credit = $cgpa = $error_cgpa = $dept = $error_dept="";
	$has_error = false ;

function addStudent($name , $dob, $credit , $cgpa , $dept){
    $query = "INSERT INTO students VALUES (0,'$name','$dob','$credit','$cgpa','$dept') ;" ;
    execute($query);
    header("Location: ../views/allstudents.php");
}
function getAllStudents(){
    $query = "select * from students";
    return get($query);
}
if (isset($_POST['addstudent']))
{

      addStudent($_POST['name'], $_POST['dob'] , $_POST['credit'] , $_POST['cgpa'] ,$_POST['dept']);

}
?>
