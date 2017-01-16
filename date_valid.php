<?php 
include("admin/connection.php");
session_start();

$b_time=$_POST['time'];
$m_id=$_SESSION['m_id'];
$b_date=$_POST['date'];

$_SESSION['time']=$b_time;
$_SESSION['date']=$b_date;
$sql="CREATE TABLE IF NOT EXISTS date_info (
			movie_id int(10) not null,
			bking_time varchar(10) not null,
			bking_date date )";
$retval = mysql_query($sql, $connect);
if (!$retval) {
    die('COULD NOT CREATE TABLE\n: ' . mysql_error());
}
$ins="INSERT INTO date_info (bking_time,movie_id,bking_date) values ('$b_time','$m_id','$b_date')";
$retval = mysql_query($ins, $connect);
if (!$retval) {
    die('COULD NOT ENTER DATA\n: ' . mysql_error());
}
header('location:seat.php');
?>