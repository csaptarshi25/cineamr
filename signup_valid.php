<?php
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
if (!$retval) {
    die('DATABASE CREATION FAILED\n: ' . mysql_error());
}
mysql_select_db('movie');//select database
$sql="CREATE TABLE IF NOT EXISTS cus_info(
				name varchar(30) not null,
				email varchar(25) primary key,
				pass varchar(25) not null)";// Create table,only creates if table does not exist
$retval = mysql_query($sql, $connect);
if (!$retval) {
    die('COULD NOT CREATE TABLE\n: ' . mysql_error());
}

$check=mysql_query("select email from cus_info where email='$email'",$connect);
$checkrows=mysql_num_rows($check);
   if($checkrows>0) {
     echo "<script>
alert('Email Id Already Exists');
window.location.href='signup.php';
</script>";
   }
else{
	$ins= "INSERT INTO cus_info(name,email,pass) VALUES ('$name','$email','$pass') ";
	$retval = mysql_query($ins, $connect);
	header('location:index.php');
}
?>