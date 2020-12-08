<?php
require_once '../models/db_connect.php';
	$phone_no = $name = $error_phone_no= $error_name = $username = $error_username = $email = $error_email = $password  = $error_password  = "";
	$has_error = false ;


function addUser($name , $username , $password , $email  , $phone){
	$password = md5($password);
	$query =  "INSERT INTO taskusers VALUES ( 0 , '$name','$password','$email', '$phone','$username') ;" ;
	echo $query;

	execute($query);
}
function validUser( $username ){

	 $query = "select count(id) from taskusers where username='" .$username ."';";
	 echo $query;

	$x =get($query);
	return $x ;
}

if( isset($_POST['signup'])){

	if(empty($_POST["name"])){
		$error_name="*Name required";
		$has_error =true;
	}
	else{
		$name = htmlspecialchars($_POST["name"]);
	}

	if(empty($_POST["phone"])){
		$error_phone_no="*Phone required";
		$has_error =true;
	}
	else{
		$phone_no = htmlspecialchars($_POST["phone"]);
	}
	if(empty($_POST["email"])){
		$error_email="*Email required";
		$has_error =true;
	}
	else{
		$email = htmlspecialchars($_POST["email"]);
	}
$ans = "";
if (!empty($_POST["username"])){


 $ans =validUser($_POST["username"]);
}
	if (empty($_POST["username"]))
{
		$error_username = "*Username required";
		$has_error = true;
}
elseif (strlen($_POST["username"]) < 6)
{
		$error_username = "*Username must be 6 characters long";
		$has_error = true;
}
elseif (strpos($_POST["username"], ' ') != false || $_POST["username"] != trim($_POST["username"]))
{
		$error_username = "*Space is not allowed at start or inside or at end in Username.";
		$has_error = true;
}
elseif($ans[0]['count(id)'] >0)
{
	$error_username = "*Username already exists!";
	$has_error = true;
}
else
{
		$username = htmlspecialchars($_POST["username"]);
}


if (empty($_POST["password"]))
 {
		 $error_password = "*Password required";
		 $has_error = true;
 }
 elseif (strlen($_POST["password"]) < 8)
 {
		 $error_password = "*Password must be 8 characters long";
		 $has_error = true;
 }
 else
 {
	 	$password = htmlspecialchars($_POST["password"]);
 }


if ($has_error){
	echo "Invalid data";
}
elseif (isset($_POST['signup'])){
addUser($name , $username , $password , $email , $phone_no );
//header("Location: index.php");
}
}
?>
