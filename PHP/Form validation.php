<html>

<head>

</head>

<body>

<form action="signup.php" method="POST">
  Username: <input type="text" name="username" /><br />
  Email: <input type="text" name="email" /><br />
  Password: <input type="text" name="password" /><br />
  Confirm password: <input type="text" name="password_confirm" /><br />
  <input type="submit" value="Register" />
</form>
<?php 
    print (<h1>"Log in"</h1></br>);

    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        echo "invalid username/password";
    }else if($username == $password){
        echo "valid user";
    }else{
        echo "invalid user!";
    }

?>

<table border="1px" cellpadding="2" cellspacing="50">

<tr>

<td>username</td>

<td>password</td>


</tr>

</table>


</html>
</boby>