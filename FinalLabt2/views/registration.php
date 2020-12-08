<?php include_once "../controller/registration.php" ;?>
<html>
	<head>
		<title>Registration</title>
  <link rel="stylesheet" href="../css_files/registration.css"></head>
	<body>

		<fieldset id="register_form" >
      <h1>Welcome to Registration.</h1>

			<form action="" method="post"  >
				<table>
          <tr>
          <td style="text-align: left;"> Name: </td>
          <td style="text-align: left;"><input type="text" name="name" value=<?php echo $name; ?>><span><?php echo $error_name; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Username:</td>
          <td style="text-align: left;"><input type="text" name="username" value=<?php echo $username; ?>><span><?php echo $error_username; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Password:</td>
          <td style="text-align: left;"><input type="password" name="password" value=<?php echo $password; ?>><span><?php echo $error_password; ?></span></td>
          </tr>

          <tr>
          <td style="text-align: left;">Email:</td>
          <td style="text-align: left;"><input type="text" name="email" value=<?php echo $email; ?> ><span><?php echo $error_email; ?></span></td>
          </tr>

          <tr>
          <td style="text-align: left;">Phone:</td>
          <td style="text-align: left;">
          <input type="text" name="phone"   value=<?php echo $phone_no; ?>> <span><?php echo $error_phone_no; ?></span>

          </td>
          </tr>


          <tr>
          <td colspan="2" align="center">
          <input type="submit" name="signup" value="Register">
          </td>
          </tr>
				</table>
			</form>
			<p>Already a member ? </p> <span> <a href="../view/index.php"> Login </a></span>

		</fieldset>
	</body>
</html>
