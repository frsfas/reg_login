<?php
    include_once("config.php");
    $result=mysqli_query($mysqli,"select user.uid,user.uname,user.email,images.image from user right join images on  user.uid=images.uid order by user.uid;");
?>

<html>

    <head>
        <title>homepage</title>
        <link rel="stylesheet" type="text/css" href="design.css">
    </head>

    <body>
        <a href="new.html">add new data</a><br /><br />
        <table width="80%" border="0">
            <tr bgcolor='#00ffff'>
                <td>uid</td>
                <td>name</td>
                <td>email</td>
                <td>pic</td>
                <td>update</td>
            </tr>
            <?php
                while($res = mysqli_fetch_array($result))
                {
                    echo"<tr>";
                    
                    echo"<td>".$res['name']."</td>";
                    echo"<td>".$res['email']."</td>";
                    
                    echo "<td><a href=\"delete.php?id=$res[uid]\" onclick=\"return confirm('are you sure you want to delete?')\">delete__</a></td>";
                }
            ?>
        </table>
    </body>

</html>