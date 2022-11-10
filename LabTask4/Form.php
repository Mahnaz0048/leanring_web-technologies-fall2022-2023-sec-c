<?php
if (isset($_POST['submit'])) 
{
  if(empty($_POST['name']))
   $msg_name = "You must be write your name";
   $name_subject = $_POST['name'];
   $name_pattern = '/^[a-zA-Z,_,-,+,*, ]*$/';
   preg_match($name_pattern, $name_subject, $name_matches);

    if(empty($_POST['email']))
    $msg_email = "You must supply your email";
    $email_subject = $_POST['email'];
    $email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
    preg_match($email_pattern, $email_subject, $email_matches);

    if(empty($_POST['username']))
    $msg_name = "You must be write your name";
    $name_subject = $_POST['username'];
    $name_pattern = '/^[a-zA-Z,_,-,+,*, ]*$/';
    preg_match($name_pattern, $name_subject, $name_matches);

    if(empty($_POST['pass']))
    $msg_pass = "Password must not be less then 8 chacarter";
    $name_subject = $_POST['pass'];
    $name_pattern = '/^[a-zA-Z0-9]*$/';
    preg_match($name_pattern, $name_subject, $name_matches);

    if(empty($_POST['confirm_pass']))
   $msg_pass = "Password must not be less then 8 chacarter";
   $name_subject = $_POST['confirm_pass'];
   $name_pattern = '/^[a-zA-Z0-9]*$/';
   preg_match($name_pattern, $name_subject, $name_matches);


    if(empty($_POST['gender']))
    $msg_gender = "You must select a gender";

    if(empty($_POST['date']))
    $msg_date = "You must give your date of birth";
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
         Name: <input type="text" name="name" value="" placeholder="Name"/><br>
        </div>
        <div> 
         Email:<input type="text" id="email" name="email" value="" placeholder="Email"/><br>
        </div>
        <div> 
         Username: <input type="text" name="username" value="" placeholder="Username"/><br>
        </div>
        <div>
         Password:<input type="password" name="pass" value="" placeholder="Password"/> <br>
        </div>
        <div> 
         Confirm Password:<input type="password" name="confirm_pass" value="" placeholder="Confirm Password"/> <br>
        </div>
        <div> 
         Gender:
        </div>
        <div> 
                <input type="radio" name="gender" /> Male 
                <input type="radio" name="gender" /> Female
                <input type="radio" name="gender" /> Other
        </div>
        <div> 
         Date Of Birth: <input type="date"/> <br>
        </div>
        <div>
        <input type="submit" name="submit" value="Submit"/>
        <input type="reset" name="reset" value="Reset"/>
        </div>  

    </form>
  </fieldset>
<body>
</body>
</html>