<?php include_once "../controller/login.php" ;?>

<html>
    <head>
        <title>Login</title>
          <link rel="stylesheet" href="../css_files/login.css"></head>
    </head>

    <body >
      <fieldset id="login_form">

<div class="container" style="width:100%;">
       <img src="../resource_files/img07.jpg" alt="" Login>
       <div class="centered">Login</div>
</div>

        <form action="" method="post" >
        <table>
            <tr>
                <td align="left"> Username</td>

                <td><input type="text" placeholder="Username here" name="username"></td> <span> <p id="username_invalid"></p> </span>
            </tr>
            <tr>
                <td> Password</td>

                <td><input type="password" placeholder="Password here" name="password"></td>  <span> <p id="password_invalid"></p> </span>
            </tr>
            <tr>

             <td colspan="2" align="right">   <input type="submit" value="Login" name="login"> </td>
         </tr>

        </table>


        </form>
              </fieldset>

      <a href="registration.php">Register</a>
    </body>
</html>
