<?php 

    require_once('database.php');

    function insertuser($user){
        $con = getConnection();
        $sql = "insert into signup values('{$user['id']}', '{$user['password']}', '{$user['name']}', '{$user['email']}', '{$user['utype']}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function logincheck($id,$password){

        $con = getConnection();
        $sql = "select * from signup where id='{$id}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);

    }


?>