<?php
if (isset($_POST['submit'])) 
{
  if(empty($_POST['username']))
   $msg_name = "You must be write your name";
   $name_subject = $_POST['username'];
   $name_pattern = '/^[a-zA-Z,_,-,+,*, ]*$/';
   preg_match($name_pattern, $name_subject, $name_matches);

   if(empty($_POST['pass']))
   $msg_pass = "Password must not be less then 8 chacarter";
   $name_subject = $_POST['pass'];
   $name_pattern = '/[a-zA-Z,_,-,+,*,@,&,$,# ]/';
   preg_match($name_pattern, $name_subject, $name_matches);
}
   ?>
   <!DOCTYPE html>
<head>
    <title>Log_In</title>
</head>
  <fieldset>
    <form method="post">

        <legend>Log In</legend>
        <div>
         Username: <input type="text" name="username" value=""/><br>
        </div>
        <div>
         Password:<input type="password" name="pass" value=""/> <br>
        </div>
        <div> 
        <label for="rememberMe">Remember me</label>
        <input type="checkbox" value="lsRememberMe" id="rememberMe"> 
        
        </div>
        <div>
        <input type="submit" name="submit" value="Login" onclick="lsRememberMe()"/> <br>
        </div>
        <div>
        <a href ="Change_password.php">Fprgot password</a>
        </div>  

    </form>
  </fieldset>
<body>
</body>
</html>
   
