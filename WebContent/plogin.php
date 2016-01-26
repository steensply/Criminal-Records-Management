<?php
$count=0;
$username=$_POST['user'];
 $password=$_POST['pass'];
 $con=mysql_connect('localhost','root','');
 $db=mysql_select_db("crm",$con);
 if(!$con)
 {
 die('Failed to connect to MySQL');
 }
 $sql="SELECT username,password FROM police WHERE username='$username' AND password='$password'";
 
 if($result=mysql_query($sql))
 
 {
	$num=mysql_num_rows($result);
	echo $num;
	
	if($num==1)
	{
	while($row = mysql_fetch_assoc($result))
	{
		header("http://localhost/CR/CRM/policehome.html");
		$user=$row['username'];
		$pass=$row['password'];
		echo '<br>'.$user.' logged in';
		echo '<br><a href="http://localhost/CR/CRM/policehome.html">Click here to continue</a>';
		$_SESSION['username']=$username;
	}
	}
	else if($num==0)
	{
		echo '<br>Login failed.<a href="http://localhost/CR/CRM/policelogin.html">Try again</a>';
	}
 }
?>