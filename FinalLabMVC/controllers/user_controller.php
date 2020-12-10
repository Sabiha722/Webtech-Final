<?php
require '../models/db_connect.php';
	$name = $error_name = $username = $error_username = $email = $error_email = $password  = $error_password  = "";
	$has_error = false ;

  function passNum()
  {

      $x = (strpos($_POST["password"], '1') + strpos($_POST["password"], '2') + strpos($_POST["password"], '3') + strpos($_POST["password"], '4') + strpos($_POST["password"], '5') + strpos($_POST["password"], '6') + strpos($_POST["password"], '7') + strpos($_POST["password"], '8') + strpos($_POST["password"], '9') + strpos($_POST["password"], '0'));

      return $x > 0; 

  }

  function addUser($name , $username , $password , $email ){
   
    $query =  "INSERT INTO users VALUES ( 0 , '$username', '$name','$password','$email') ;" ;

    execute($query);
  }

	if( isset($_POST['signup'])){

		if(empty($_POST["name"])){
			$error_name="*Name required";
			$has_error =true;
		}
		else{
			$name = htmlspecialchars($_POST["name"]);
		}
		if(empty($_POST["email"])){
			$error_email="*Email required";
			$has_error =true;
		}
		else{
			$email = htmlspecialchars($_POST["email"]);
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

	 elseif (!passNum())
	 {
			 $error_password = "*Password must contain a number ";
			 $has_error = true;
	 }
	 elseif (strtolower($_POST["password"]) == $_POST["password"])
		{
				$error_password = "*Password must contain uppercase and lowercase alphabets ";
				$has_error = true;
		}



		else
		{
			if (strpos($_POST["password"], '#') == false && strpos($_POST["password"], '?') == false )
					{
				 $error_password = "*Password must  contain a special character. Ex : # ? ";
				 $has_error = true;
					}
			if	(strpos($_POST["password"], '#') == true ) {
					$password = htmlspecialchars($_POST["password"]);
					$has_error = false;

			}

			if (strpos($_POST["password"], '?') == true )
			{
					$password = htmlspecialchars($_POST["password"]);
					$has_error = false;
			}

		}




 if ($has_error){
    echo "Invalid data";
  }
  elseif (isset($_POST['signup'])){
addUser($name , $username , $password , $email );

header("Location: login.php");
  }
}
function validUser( $username , $passw){

	$query = 'select count(id) from users where username="' .$username .'" and password="' .$passw .'";';
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
