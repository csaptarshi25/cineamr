<?php 
$dbhost  = 'localhost';
$dbuser  = 'root';
$dbpass  = '';
$connect = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$connect) {
    die('SERVER CONNECTION FAILED...\n: ' . mysql_error());
}
$db = "CREATE DATABASE IF NOT EXISTS movie";// Create database,only creates if DB does not exist
$retval = mysql_query($db, $connect);
if (!$retval) {
    die('DATABASE CREATION FAILED\n: ' . mysql_error());
}
mysql_select_db('movie');
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	$id= $_POST["r1"];
	$sql="SELECT * from movie_info where id='$id'";
	$res = mysql_query($sql, $connect);
	$row = mysql_fetch_assoc($res);
	$_SESSION['name1']=$row['name'];
	$_SESSION['price']=$row['price'];
	$_SESSION['m_id']=$row['id'];
	echo $row['name'];
	header('location:date.php');
}
else{
	 echo "<script>
alert('Please Login ');
window.location.href='login.php';
</script>";
 }

?>
