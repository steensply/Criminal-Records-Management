<?php
include 'clogin.php';
$con=mysql_connect('localhost','root','');
if(!$con)
{
echo 'Failed to connect to db';
}
$db=mysql_select_db("crm",$con);
$sql="SELECT * FROM civilian WHERE username={$_POST['user']}";
$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);
echo "Name";
?>