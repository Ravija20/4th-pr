<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$dbhost = "localhost";
$dbuser = "dbusername";
$dbpass = "dbpassword";
$dbname = "dbname";
mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db($dbname) or die(mysql_error());

$state = $_GET['state'];


$state = mysql_real_escape_string($state);


$query = 'SELECT name,state,price FROM state_wise_price ORDER BY price ASC'; 


<body>
$qry_result = mysql_query($query) or die(mysql_error());

$display_string = "<table>";
$display_string .= "<tr>";
$display_string .= "<th>Name</th>";
$display_string .= "<th>price</th>";
$display_string .= "<th>State</th>";
$display_string .= "</tr>";
while($row = mysql_fetch_array($qry_result)){
$display_string .= "<tr>";
$display_string .= "<td>$row[name]</td>";
$display_string .= "<td>$row[price]</td>";
$display_string .= "<td>$row[state]</td>";
$display_string .= "</tr>";
}
echo "Query: " . $query . "<br />";
$display_string .= "</table>";
echo $display_string;
?>
</body>
</html>
