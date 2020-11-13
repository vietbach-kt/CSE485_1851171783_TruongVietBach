<?php
    $host = 'localhost';
    $user = 'admin';
    $pass = 'abcabc';
    $db   = 'ajax03';
    $conn = mysqli_connect($host,$user,$pass, $db);
    if(!$conn){
        die("Không thể kết nối");
    }
?>