<?php
$fullname = $error_fullname = $username = $error_username = $password =$error_password  = $error_confirm_password = "";
$error_gender = $email = $error_email = $phone_no = $error_phone_no  = $error_city = $city= "";
$hasError = false;
function PassNum()
{

    $x = (strpos($_POST["password"], '1') + strpos($_POST["password"], '2') + strpos($_POST["password"], '3') + strpos($_POST["password"], '4') + strpos($_POST["password"], '5') + strpos($_POST["password"], '6') + strpos($_POST["password"], '7') + strpos($_POST["password"], '8') + strpos($_POST["password"], '9') + strpos($_POST["password"], '0'));

    return $x > 0; # x will never be zero if any one of the number exists in the string

}

	if(isset($_POST["register"])){
		if(empty($_POST["fullname"])){
			$error_fullname="Full name required";
			$hasError =true;
		}
		else{
			$fullname = htmlspecialchars($_POST["fullname"]);
		}


		if (empty($_POST["username"]))
	{
			$error_username = "*Username required";
			$hasError = true;
	}
	elseif (strlen($_POST["username"]) < 6)
	{
			$error_username = "*Username must be 6 characters long";
			$hasError = true;
	}
	elseif (strpos($_POST["username"], ' ') != false || $_POST["username"] != trim($_POST["username"]))
	{
			$error_username = "*Space is not allowed at start or inside or at end in Username.";
			$hasError = true;
	}
	else
	{
			$username = htmlspecialchars($_POST["username"]);
	}


	if (empty($_POST["password"]))
	 {
			 $error_password = "*Password required";
			 $hasError = true;
	 }
	elseif (strlen($_POST["password"]) < 8)
	 {
			 $error_password = "*Password must be 8 characters long";
			 $hasError = true;
	 }

	elseif (!PassNum())
	 {
			 $error_password = "*Password must contain a number ";
			 $hasError = true;
	 }
	elseif (strtolower($_POST["password"]) == $_POST["password"])
    {
        $error_password = "*Password must contain uppercase and lowercase alphabets ";
        $hasError = true;
    }

    else
    {
			if (strpos($_POST["password"], '#') == false && strpos($_POST["password"], '?') == false )
	 	 			{
	 			 $error_password = "*Password must  contain a special character. Example: # ? ";
	 			 $hasError = true;
	 	 			}
			if	(strpos($_POST["password"], '#') == true ) {
				  $password = htmlspecialchars($_POST["password"]);
					$hasError = false;

			}

			if (strpos($_POST["password"], '?') == true )
			{
				  $password = htmlspecialchars($_POST["password"]);
					$hasError = false;
			}

    }

		 if (empty ($_POST["password_repeated"]))
			{
						 $error_confirm_password = "Repeat password. ";
					$hasError = true;
			}
			if ( $_POST["password_repeated"]!= $password)
			 {
							$error_confirm_password = "Password does not match. ";
					 $hasError = true;
			 }

			 if (empty($_POST["phone_no"]))
{
		$error_phone_no = "*Phoneno required";
		$hasError = true;
}
elseif (!is_numeric($_POST["phone_no"]))
{
		$error_phone_code = "*Phoneno must be neumeric";
		$hasError = true;
}
else
{
		$phone_no = htmlspecialchars($_POST["phone_no"]);
}


if (empty($_POST["gender"]))
	{
			$error_gender = "*Gender required";
			$hasError = true;
	}
	else
	{
			$gender = htmlspecialchars($_POST["gender"]);
	}


	if (empty($_POST["email"]))
	{
			$error_email = "*Email required";
			$hasError = true;
	}
	elseif (strpos($_POST["email"], '@') == false || strrpos($_POST["email"], '.') == false || (strrpos($_POST["email"], '.') < strpos($_POST["email"], '@')))
	# strrpos returns the last occurance of a character , I used to find the last occured (.) and its position and later validated it if the dot is after (@) in the third condition.

	{
			$error_email = "*Valid email required";
			$hasError = true;
	}
	else
	{
			$email = htmlspecialchars($_POST["email"]);
	}

	if (empty($_POST["city"]))
		{
				$error_city = "*City required";
				$hasError = true;
		}
		else
		{
				$city = htmlspecialchars($_POST["city"]);
		}

		if(!$hasError){

      $con = mysqli_connect("localhost","root","","webtech");

      // Check connection
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }
      $password = md5($password);

      $que = 'insert into sample values("","'  .$username .'","' .$password .'","' .$gender .'","'  .$email .'","' .$phone_no  .'","'  .$city .'","user" ) ' ;
      echo $que;

  $ans =   mysqli_query($con, $que);

 if($ans==1){
				header("Location: ../html_files/login.php");
		}}
    else
    {
      echo "Try again";
      header("Location: ../html_files/registration.php");

    }

	}

?>
