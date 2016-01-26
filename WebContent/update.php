<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
die('Failed to connect to db'.mysql_error());
}
$db=mysql_select_db("crm",$con);
$sql="UPDATE criminal set name='$_POST[name]' crime='$_POST[crime]' status='$_POST[status]' where id='$_POST[id]'";
if(!mysql_query($sql,$con))
{
die("Failed to update".mysql_error());
}
echo "Done";
?>