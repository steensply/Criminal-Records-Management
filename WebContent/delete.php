<?php
header('Location: http://localhost/CR/CRM/policehome.html');
$con=mysql_connect('localhost','root','');
if(!$con)
{
echo 'failed to connect to db'.mysql_error();
}
$db=mysql_select_db('crm',$con);
$sql="DELETE FROM criminal WHERE id='$_POST[del]'";
if(!mysql_query($sql,$con))
{
	die(''.mysql_error());
	echo 'not done';
}
else
{echo'done';}
?>