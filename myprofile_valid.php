<?php
session_start();
$dbhost  = 'localhost';
$dbuser  = 'root';
$dbpass  = '';
$connect = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$connect) {
    die('SERVER CONNECTION FAILED...\n: ' . mysql_error());
}
$db = "CREATE DATABASE IF NOT EXISTS movie";// Create database,only creates if DB does not exist

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$retval = mysql_query($db, $connect);
mysql_select_db('movie');

$sql = "UPDATE cus_info SET name='$name',pass='$pass' WHERE email='$email'";
$retval = mysql_query($sql, $connect);
if (!$retval) {
    die(' FAILED\n: ' . mysql_error());
}
$sql="select name,email,pass from cus_info where email='$email'";
$res = mysql_query($sql, $connect);
if (!$res) {
    die('error' . mysql_error());
}
 
$_SESSION['name'] = $row['name'];
$_SESSION['email'] = $row['email'];
$_SESSION['pass'] = $row['pass'];
header('Location:logout.php');

?>