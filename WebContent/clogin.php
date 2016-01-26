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
 $sql="SELECT username,password FROM civilian WHERE username='$username' AND password='$password'";
 //$sql="SELECT username, password FROM civilian";
 if($result=mysql_query($sql))
 
 {
	$num=mysql_num_rows($result);
	echo $num;
	if($num==0)
	{
		echo '<br>Login failed.<a href="http://localhost/CR/CRM/civilianlogin.html">Try again</a>';
	}
	else if($num==1)
	{
	while($row = mysql_fetch_assoc($result))
	{
		
		$user=$row['username'];
		$pass=$row['password'];
		echo '<br>'.$user.' logged in';
		echo "<br><a href='http://localhost/CR/CRM/civilhome.html'>Click here to continue</a>";
		$_SESSION['username']=$username;
	}
	}
 }
?>