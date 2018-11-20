<?php
$connection = mysql_connect('localhost', 'root', 'mysql');
if (!$connection){
	die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('logincookies');
if (!$select_db){
	die("Database Selection Failed" . mysql_error());
}
if (isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
 
$sql = "SELECT * FROM `users` WHERE email='$email' and password='$password' ";
$result = mysql_query($sql) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 1){
	echo "You are logged in";
    header('Location:welcome.html');

}else {
	echo "invalid login credentials";
	
}
}
?>
