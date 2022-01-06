<?php
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"1951061136_university");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>