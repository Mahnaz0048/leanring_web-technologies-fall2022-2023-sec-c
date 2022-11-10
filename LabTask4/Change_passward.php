<?php
if (isset($_POST['submit'])) 
{
   if(empty($_POST['cpass']))
   $msg_pass = "Password must not be less then 8 chacarter";
   $name_subject = $_POST['cpass'];
   $name_pattern = '/[a-zA-Z0-9]/';
   preg_match($name_pattern, $name_subject, $name_matches);

   if(empty($_POST['npass']))
   $msg_pass = "Password must not be less then 8 chacarter";
   $name_subject = $_POST['npass'];
   $name_pattern = '/[a-zA-Z0-9 ]/';
   preg_match($name_pattern, $name_subject, $name_matches);

   if(empty($_POST['repass']))
   $msg_pass = "Password must not be less then 8 chacarter";
   $name_subject = $_POST['repass'];
   $name_pattern = '/[a-zA-Z0-9 ]/';
   preg_match($name_pattern, $name_subject, $name_matches);
}
   ?>
   <!DOCTYPE html>
<head>
    <title>Change Password</title>
</head>
  <fieldset>
    <form method="post">

        <legend>Change Passward</legend>
        <div>
         Current Password <input type="text" name="cpass" value=""/><br>
        </div>
        <div>
         New Password:<input type="password" name="npass" value=""/> <br>
        </div>
        <div>
         Re-type New Password:<input type="password" name="repass" value=""/> <br>
        </div>
        <div>
        <input type="submit" name="submit" value="Submit"/> <br>
        </div>
        
    </form>
  </fieldset>
<body>
</body>
</html>