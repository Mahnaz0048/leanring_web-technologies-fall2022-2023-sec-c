<?php

$name= $_POST["name"];
$buyingPrice= $_POST["buyingPrice"];
$selling_price= $_POST["sellingPrice"];
$display=$_POST["display"];
$rowName="row_name";

if(isset($_COOKIE['row_name'])){
$rowName=$_COOKIE['row_name'];
}


    $con = mysqli_connect('localhost:3307', 'root', '', 'product_db');
        $sql = "update products set name='{$name}', buyingPrice='{$buyingPrice}', selling_price='{$selling_price}', display='{$display}' where name='{$rowName}'";
        $status = mysqli_query($con, $sql);
        
        if($status){
            header('location: displayProduct.php?message=update_successful');

            setcookie('row_name',$rowName,time()-10,'/');
        }else{
           echo "Update Failed!";

           setcookie('row_name',$rowName,time()-10,'/');
        }

 




?>