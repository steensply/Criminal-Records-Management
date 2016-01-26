<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
echo 'Failed to connect to database'.mysql_error();
}
$db=mysql_select_db("crm",$con);
$sql="INSERT INTO criminal(ID,name,crime,status,knownassoc,arrestedby,dob,sentencedtill) values ('$_POST[id]','$_POST[name]','$_POST[crime]','$_POST[status]','$_POST[assoc]','$_POST[arrested]','$_POST[dob]','$_POST[till]')";
if(!mysql_query($sql))
{
echo 'Failed to insert into the database'.mysql_error();
}
else
{
echo 'Done';
}
header('Location: http://localhost/CR/CRM/policehome.html')
?>