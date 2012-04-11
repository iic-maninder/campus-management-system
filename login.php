<?php session_start(); ?>
<?php

include("config.php");


if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$pass = $_POST['password'];
	
	if($username == "" || $pass == "")
	{
		echo "Either username or password field is empty.";
		echo "<br/>";
		//echo "<a href='login.php'>Go back</a>";
	}
	
	else
	{
		$result = mysql_query("select * from student where user='$Uni_Enroll_No' and password= '$Password'",$conn)
		or die("Could not execute the select query no record found .");
		
		/*$username=mysql_query("select firstname from login where email='$email' and password='$pass'",$conn)
		or die("Could not execute the select query no record found .");
		*/
		$row = mysql_fetch_assoc($result);
		
		if(is_array($row) && !empty($row))
		{			
			$validuser = $row['Uni_Enroll_No'];
			$_SESSION['valid'] = $validuser;
		}
		else
		{echo"<br/>";
			echo "Invalid username or password.";
		
			echo "<a href='login.php'> Retype  </a>";
		}

		if(isset($_SESSION['valid']))
		{
	
       		echo "<a href='prof.php'> Edit your profile</a> ";
			/*echo "<a href='admform.php'>FILL THE APPLICATION FORM </a> | <a href='logout.php'>Logout</a>";
			echo "<a href='statusreg.php'>Check status</a>";	
			echo "<br/>";*/
			echo "<a href='logout.php'>LOGOUT</a>";
			echo "</br>";
			echo "Signed in as : ".$_SESSION['valid']."!";
		}
		
	}
}

else
{

?>
<?php
}
?>