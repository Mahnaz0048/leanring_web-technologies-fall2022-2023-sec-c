<?php

$name= $_POST["name"];
$buying_price= $_POST["buyingPrice"];
$selling_price= $_POST["sellingPrice"];
$display=$_POST["display"];


if($name=="" || $buying_price =="" || $selling_price==""  )
{

    header('location: AddProduct.html?err=null');

    $con = mysqli_connect('localhost:3307', 'root', '', 'product_db');
        $sql = "insert into products values('{$name}', '{$buying_price}', '{$selling_price}', '{$display}')";
        $status = mysqli_query($con, $sql);
        
        if($status){
            header('location: displayProduct.php?message=adding_successful');
        }else{
           echo "Adding Failed!";
        }
}
 




?>