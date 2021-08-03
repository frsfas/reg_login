<?php
    include("config.php");
    if(isset($_POST['update']))
    {

        $id=mysqli_real_escape_string($mysqli,$_POST['id']);
        $name=mysqli_real_escape_string($mysqli,$_POST['name']);
        $age=mysqli_real_escape_string($mysqli,$_POST['age']);
        $location=mysqli_real_escape_string($mysqli,$_POST['location']);

        $mobile_no=mysqli_real_escape_string($mysqli,$_POST['mobile_no']);

        if(empty($name)||empty($age)||empty($location)||empty($mobile_no))
        {
            if(empty($name))
            {
                echo"<font color='red'>name field is empty..</font></br>";
            }
            if(empty($age))
            {
                echo"<font color='red'>age field is empty..</font></br>";
            }
            if(empty($location))
            {
                echo"<font color='red'>location field is empty..</font></br>";
            }

            if(empty($mobile_no))
            {
                echo"<font color='red'> enter your  mobile number</font></br>";
            }
            echo"<br/><a href='javascript:self.history.back();'>go back</a>";
        }
        else
        {
            $result=mysqli_query($mysqli,"update users set name='$name',age='$age',location='$location',mobile_no='$mobile_no' where id='$id' ");
            header("location:index.php");
        }
    }
?>