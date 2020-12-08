<?php 
      require_once"../controllers/usercontroller.php";
?>
<html>
    <head>
        <title>Login</title>
<script src="../js/validate_login.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body >

      <div class="container">



      <fieldset id="login_form">
<h1>Login</h1>

        <form action="" method="post" name="loginform" onsubmit="return validateform()" >
        <table>
            <tr>
                <td align="left"> Username  </td>

                <td><input type="text" placeholder="Username here" name="username"></td> <span> <p id="username_error"></p> </span>
            </tr>
            <tr>
                <td> Password  </td>

                <td><input type="password" placeholder="Password here" name="password"></td>  <span> <p id="password_error"></p> </span>
            </tr>
            <tr>

             <td colspan="2" align="right">   <input type="submit" value="Login" name="login"> </td>
         </tr>

        </table>

        </form>
              </fieldset>
          <p>New here ? </p>
      <a href="registration.php">Register</a>
            </div>
    </body>
</html>