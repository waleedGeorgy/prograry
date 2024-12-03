<?php session_start();
  if(isset($_POST['submit'])){
	$name=@mysql_real_escape_string(trim($_POST['name']));
	$password=mysql_real_escape_string($_POST['password']);
	if ($name==("Waleed") || $name==("Lama") && $password==("1q2w3e4r5t"))
	{
		$_SESSION['name']= $name;
		$_SESSION['password']= $password;
		header("location:adminpage.php");
	}
	else
	{	
		echo "Wrong Name or Password" ;
	}
  }
  echo"<br>";
  echo"<br>";
  echo"<a href='admin.php'>Back</a>";
?>