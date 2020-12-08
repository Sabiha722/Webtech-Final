<?php
require_once '../models/db_connect.php';
	$name = $error_name = $username = $error_username = $email = $error_email = $password  = $error_password  = "";
	$has_error = false ;

function validUser( $username , $passw){
	$pass = md5($passw);
	 $query = 'select count(id) from taskusers where username="'.$username.'" and password="'.$pass .'";';
	 echo $query;

	$x =get($query);
	return $x ;
}
if (isset($_POST['login'])){
	$flag=false;
	if (empty($_POST["username"]))
{
		$error_username = "*Username required";
		$has_error = true;
}
	if( (isset($_POST['password']) )&&(isset($_POST['username']))){


$pass = $_POST['password'];
$username = htmlspecialchars($_POST["username"]);






$ans =validUser($username , $pass);

if ($ans[0]['count(id)'] ==1 ){
	$flag = true;

session_start();
$_SESSION["logged_in"] = true;
$_SESSION["username"] = $_POST['username'];

}
}


if($flag){

	header("Location: dashboard.php");
}else{
	if( (isset($_POST['password']) )&&(isset($_POST['username']))){
	echo "Invalid credentiails";
}
else{ echo "Provide credentials.";}
}
}
 ?>
