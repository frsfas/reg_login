<html>

	<head>
		<title>project</title>
	</head>

	<body>
		<?php
			include_once("config.php");
			if(isset($_POST['submit']))
			{
		  	$name=mysqli_real_escape_string($mysqli,$_POST['name']);
		  	$email=mysqli_real_escape_string($mysqli,$_POST['email']);
		  

		    if(empty($name)||empty($age)||empty($location)||empty($mobile_no))
		 		{
			    if ((empty($name))) 
					{
						echo"<font color='#00ff00'>name field is empty</font></br>";
					}
			    if ((empty($email))) 
					{
						echo"<font color='#00ff00'>age field is empty</font></br>";
					}
			   
		        echo"<br/><a href='javascript:self.history.back()'>go back</a>";
		 		}
			   else
				{
					$result=mysqli_query($mysqli,"insert into user(name,email)values('$name','$email')");
					echo"<font color='#00ff00'>data added successfully</font></br>";
					echo"<br/><a href='index.php'>view result</a>";
				}  
			}
		?>
	</body>

</html>