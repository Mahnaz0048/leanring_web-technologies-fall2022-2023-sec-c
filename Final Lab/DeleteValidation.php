<?php

if(isset($_COOKIE['row_name'])){
$row_name=$_COOKIE['row_name'];

$con = mysqli_connect('localhost:3307', 'root', '', 'product_db');
        $sql = "delete from products  where name='{$row_name}'";
        $status = mysqli_query($con, $sql);
        
        if($status){

            setcookie('row_name',$row_name,time()-60,'/');
        }else{
           echo "Delete Failed!";

           setcookie('row_name',$row_name,time()-60,'/');
        }

}

else{   
    
           echo "Delete Failed!";

           setcookie('row_name',$row_name,time()-60,'/');
        
}
 
?>