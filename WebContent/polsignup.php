<?php
//header('Location: http://localhost/CR/CRM/main.html');
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('crm',$con);
if(!$con)
{
die('Failed to connect to db');
}
$sql="INSERT INTO police(ID,name,dob,station,position,phno,address,username,password) values ('$_POST[polid]','$_POST[name]','$_POST[poldob]','$_POST[polstation]','$_POST[polposition]','$_POST[polnumber]','$_POST[poladdress]','$_POST[poluser]','$_POST[polpass]')";
if(!mysql_query($sql,$con));
{
echo''.mysql_error();
echo '<br><a href="http://localhost/CR/CRM/policereg.html">Registration page</a>';
}

?>