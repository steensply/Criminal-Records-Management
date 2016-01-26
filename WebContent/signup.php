<?php
//header('Location: http://localhost/CR/CRM/main.html');
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('crm',$con);

if (!$con)
  {
  echo 'Failed to connect to MySQL:' . mysql_error();
  echo '<a href="http://localhost/CR/CRM/main.html">Home</a>';
  }
$db = mysql_select_db("crm",$con);
$sql="INSERT INTO civilian(name, pan, phno, address, username, password) VALUES ('$_POST[name]','$_POST[panid]','$_POST[number]','$_POST[address]','$_POST[username]','$_POST[password]')";

if(!mysql_query($sql,$con))
{
echo 'Error:'.mysql_error();
echo '<br><a href="http://localhost/CR/CRM/register.html">Registration page</a>';
}
else
{
echo '<br><a href="http://localhost/CR/CRM/index.html">Home</a>';
}
?>