<?php
session_start();
$dbhost  = 'localhost';
$dbuser  = 'root';
$dbpass  = '';
$connect = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$connect) {
    die('SERVER CONNECTION FAILED...\n: ' . mysql_error());
}
mysql_select_db('movie');//select database
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="select name,email,pass from cus_info where email='$email'";
$res = mysql_query($sql, $connect);
if (!$res) {
    die('error' . mysql_error());
}

$row = mysql_fetch_assoc($res);
if( $row['pass'] == ($pass) ){
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['pass'] = $row['pass'];
    $_SESSION['loggedin'] = true;
   	header('Location:index.php');  
    exit();
}
else{
    echo "<script>
alert('Oops!!Password Doesnot Match');
window.location.href='login.php';
</script>";
}

        
       
?>
