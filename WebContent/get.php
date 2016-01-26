
<?php
$con=mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("crm",$con);

$result = mysql_query("SELECT ID,name,crime from criminal where name='$_POST[name]'");

while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    //printf ("ID: %s	Name: %s Crime: %s", $row[0], $row["name"], $row["crime"]);
	echo '<table border=3><tr><th>ID</th><th>Name</th><th>Crime</th></tr><tr><td>'.$row['ID'].'</td><td>'.$row['name'].'</td><td>'.$row['crime'].'</td></tr></table>';
	echo '<br><a href="http://localhost/CR/CRM/civilhome.html">Home</a>';
}

mysql_free_result($result);
?>
