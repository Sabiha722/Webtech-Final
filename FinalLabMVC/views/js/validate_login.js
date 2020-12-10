function validateform(){
var name=document.loginform.username.value;
var password=document.loginform.password.value;
var haserror = 0;
if (name==null || name==""){
  document.getElementById("username_error").innerHTML="Username can't be blank";
    haserror = 1;

}
else if (password==null || password==""){
  document.getElementById("password_error").innerHTML="Password can't be blank";
    haserror = 1;

}
else if(password.length<8){
  document.getElementById("password_error").innerHTML="Password must be at least 8 characters long.";

  haserror = 1;
  }
  else if(name.length<6){
      document.getElementById("username_error").innerHTML="Username must be at least 6 characters long.";
    haserror = 1;
    }
  if (haserror==1){
    return false;
  }

  return true;
}
