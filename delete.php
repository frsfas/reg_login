<?php
    include("config.php");
    $id=$_GET['uid'];
    $result=mysqli_query($mysqli,"delete from user where uid=$uid");
    header("location:index.php");
?>