<?php
$con=mysql_connect('localhost','root','');

if(!$con)
{
	die('Failed to connect to db'.mysql_error());
}

$db=mysql_select_db("crm",$con);

$sql="SELECT * FROM complaints";
$result=mysql_query($sql);

while($row=mysql_fetch_assoc($result))
{
	echo '<table border=3><tr><th>Civilian</th><th>Criminal</th><th>Complaint</th><th>Area</th><th>Status</th></tr><tr><td>'.$row['civilian'].'</td><td>'.$row['name'].'</td><td>'.$row['complaint'].'</td><td>'.$row['area'].'</td><td>'.$row['status'].'</td></tr></table>';
	echo '<br><a href="http://localhost/CR/CRM/policehome.html">Home</a>';
}
?>