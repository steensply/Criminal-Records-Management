<?php
$con=mysql_connect('localhost','root','');
$name=$_POST['name'];
if(!$con)
{
echo 'Failed to connect to the db'.mysql_error();
}

$db=mysql_select_db("crm",$con);
$sql="SELECT id,name,crime,status,knownassoc,arrestedby FROM criminal WHERE name=$name";
$result=mysql_query($sql);
//$num=mysql_num_rows($result);
/*if($num==0)
{
	echo 'No records<br><a href="http://localhost/CR/CRM/policehome.html">Home</a>';
}
else
{
*/
if(!mysql_query($sql))
{
die('Failed to retrieve'.mysql_error());
}
else
{
	while($row=mysql_fetch_assoc($result))
	{
		echo '<table border=3><tr><th>ID</th><th>Name</th><th>Crime</th><th>Status</th><th>Known Assoc.</th><th>Arrested by</th></tr>';
	echo'<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['crime'].'</td><td>'.$row['status'].'</td><td>'.$row['knownassoc'].'</td><td>'.$row['arrestedby'].'</td></tr></table>';
	echo '<a href="http://localhost/CR/CRM/policehome.html">Home</a>'; 
	}
}

?>