<html>

<head>

</head>

<body>


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
<input type="submit" name="submit" value="Submit"/>
</body>

</html>
</boby>