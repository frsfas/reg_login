<?php
    $servername='localhost';
    $dbname='fas';
    $username='root';
    $password='';

    $mysqli=mysqli_connect($servername,$username,$password,$dbname);
    
    $sql = "select user.uid,user.uname,user.email,images.image from user right join images on  user.uid=images.uid order by user.uid";
?>