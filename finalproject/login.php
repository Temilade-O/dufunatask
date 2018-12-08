<?php  //Start the Session
session_start();
 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['email']) and isset($_POST['pwd'])){
//3.1.1 Assigning posted values to variables.
$email = $_POST['email'];
$pwd = $_POST['pwd'];
//3.1.2 Checking the values are existing in the database or not
$sql = "SELECT * FROM `user` WHERE email='$email' and pwd='$pwd'";
 
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['email'] = $email;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['btn-login'])){
$email = $_SESSION['email'];
echo "Hi " . $firstname . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";
 
}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
echo "Register Now";
header('location:note.html');

}

?>

