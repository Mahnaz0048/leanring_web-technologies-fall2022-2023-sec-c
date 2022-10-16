<html>

<head>

</head>

<body>


<?php 
    print (<h1>"Change Password"</h1></br>);

    
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $retype_new_password = $_pOST['retype_new_password'];


    if($ucurrent_password !== "" || $new_password == "") 
    if else($newpasword == $retype_new_password){
        echo "valid user";
    }
    else{
      echo'Retype the password';
    }

?>

<table border="1px" cellpadding="2" cellspacing="50">

<tr>

<td>current_password</td>

<td>new_password</td>

    <td>retype_new_password</td>



</tr>

</table>
<input type="submit" name="submit" value="Submit"/>
</body>

</html>
</boby>