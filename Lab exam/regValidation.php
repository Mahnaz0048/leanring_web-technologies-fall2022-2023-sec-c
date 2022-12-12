<?php

session_start();
require_once('usermodel.php');

$id = $_REQUEST['id'];
$password = $_REQUEST['pass'];
$con_password = $_REQUEST['cpass'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$user = $_REQUEST['utype'];

if($id != null || $password != null || $con_password != null || $name != null || $email != null || $user != null){
    echo"Success";
}else{
    echo"Null value..";
}
if($id == "" || $password == "" || $con_password == "" || $name == "" || $email == "" || $user == ""){
        
    header('location: Signup.php?err=null');
}else{
    if($password === $con_password){

        $person = ['id'=> $id, 'pass'=> $password, 'name'=> $name, 'email'=> $email, 'utype'=> $user];
        
        $status = insertuser($person);
        if( $status){

            $_SESSION['id'] = $id; $_SESSION['password'] = $password; 
            header('location: login.php');
        }else{
            header('location: Registration.html?err=dberror');
        }
        
    }else{
        header('location: Registration.html?err=checkcpassword');
    }
}



?>