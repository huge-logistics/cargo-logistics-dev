<?php error_reporting(E_ERROR | E_PARSE);
?>
<?php
//$Connection = mysql_connect('localhost','theunite_unitedcargo','') or die("No Connection"); 
$Connection = mysqli_connect("localhost","root","hug3l0gistics11","");

/*
By Red Server Host:
Wrong connection string found: Correct syntax $Connection = mysql_connect('localhost', 'mysql_user', 'mysql_password');
The password is not present in the connection line above.
*/

$ConnectionDB = mysql_select_db('hugelogistics',$Connection);
?>
