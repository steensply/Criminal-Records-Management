<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
	echo 'Failed to connect to db'.mysql_error();
}
$db=mysql_select_db("crm",$con);
$sql="INSERT INTO complaints(complaint,name,civilian,area) values ('$_POST[crime]','$_POST[name]','$_POST[civilian]','$_POST[area]')";

if(!mysql_query($sql,$con))
{
	die('Failed to connect to db'.mysql_error());
}

else
{
	echo 'Done';
	echo'<br><a href="http://localhost/CR/CRM/civilhome.html">Home</a>';
}
?>