<?php
    require_once "../models/db_connect.php";
    $name="";
    $username="";
    $err_name="";
    $err_username="";
    $password="";
    $err_password="";
    $email="";
    $err_email="";
    $hasError=False;
    if(isset($_POST["sign_up"])){
        if(empty($_POST["name"])){
            $err_name="Name required*";
            $hasError =true;   
        }
        else{
            $name = htmlspecialchars($_POST["name"]);
        }
   
        if(empty($_POST["username"])){
            $err_username="Username required*";
            $hasError =true;   
        }
        else{
            $username = htmlspecialchars($_POST["username"]);
        }
       
        if(empty($_POST["password"])){
            $err_password="Password required*";
            $hasError =true;   
        }
        else{
            $password = htmlspecialchars($_POST["password"]);
        }
        if(empty($_POST["email"])){
            $err_email="Email required*";
            $hasError =true;   
        }
        else{
            $email = htmlspecialchars($_POST["email"]);
        }
            if(!$hasError)
            {
                //echo"Ok";
                addUser($name,$username,$password,$email);
                header("Location: login.php");
               
            }
           
           
           
    }
    else if(isset($_POST["login"]))
    {
        if(!$hasError)
            {
                $result=authenticate($username,$password);
                if($result)
                {
                    header("Location: dashboard.php");
                }
                else{
                    echo "Invalid Username or Password";
                }
            }
       
    }
   
    function addUser($name,$username,$password,$email)
    {
        $password=md5($password);
       
        $query = "INSERT INTO users (name,username,password,email) VALUES ('$name','$username','$password','$email')";
        execute($query);
       
       
       
       
    }
    function authenticate($username,$password)
    {
       
        $query = 'select username, password from users where username="' .$_POST['username'] .'" and password="' .md5($_POST['password']) .'";';
        ;
        $result=get($query);
        if(count($result)>0)return true;
        return false;
           
       
           
       
    }
	