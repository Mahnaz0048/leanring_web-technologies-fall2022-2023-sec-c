<html>

 <title>Display Product</title>

 <body>

<fieldset>
    <legend>Display</legend>

<table border=1>
    <tr>
        <th>NAME</th>
        <th>PROFIT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr> 

<?php $con = mysqli_connect('localhost', 'root', '', 'product_db');

$sql = "select name, selling_price-buying_price profit from products where display='yes'";
    $result = mysqli_query($con, $sql);

    
while($data  = mysqli_fetch_assoc($result)){  ?>
 
   
  <tr>
 <td><?php echo $data['name']?></td>      
 <td><?php echo $data['profit']?></td>        
 <td><a href='EditProduct.html?edit=<?php  echo $data['name'];?>' class='edit_btn' >edit</a></td>    
 <td><a href='DeleteProduct.html?delete=<?php  echo $data['name'];?>' class='delete_btn' >delete</a></td>    
 </tr>
 
<?php } ?>

 </table>

</fieldset>

</body>

</html>
 