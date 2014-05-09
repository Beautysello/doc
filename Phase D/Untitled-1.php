  <?php
session_start();
	$display="";
	if(isset($_POST['username']) && isset($_POST['password']))
	{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if($username&&$password)
	{
		// calling the database connection
		  require("userLogin.class.php");
		  $obj = new userLogin();
		  $obj->checkUser($username,$password);
		
		//Selecting the username from the database which is an email
		
		
		
			if($rows!=0)
			{
				while($row = mysql_fetch_assoc($query))
				{
					$dbemail= $row['surname'];
					$dbpassword= $row['password'];
				}
					
					 if($surname==$dbemail && $password==$dbpassword)
					 {
						$_SESSION['admin']=1;
						$_SESSION['username']=$username;
						header("Location: myAcc.php");
					 }
					 else
						{
						   $display= "Incorrect password !";
						}
			}
			else
			{
				$display="User does not exist!";	
			}
		
		}
	
	}
	
	
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>