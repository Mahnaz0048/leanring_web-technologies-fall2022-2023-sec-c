<?php
session_start();

require_once('usermodel.php');
$id =$_REQUEST['id'];
$password=$_REQUEST['password'];

if($id != null || $password != null){
    echo"Success";
}else{
    echo"Null value..";
}
if($id == "" || $password == ""){
        
    header('location: login.php?err=null&&msg=abc');

}else{
    
    logincheck($id,$password);
      
}

?>