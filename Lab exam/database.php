<?php 

    $host = "localhost:3307";
    $hostname = "root";
    $password = "";
    $dbname = "usertable";

    function getConnection(){
        global $host;
        global $hostname;
        global $password;
        global $dbname;
        

        return $con = mysqli_connect($host, $hostname, $dbpass, $dbname);
    }

?>