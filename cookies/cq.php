<?php
$firstname= $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST[ 'email'];
$password = $_POST['password'];


saveToDatabase($firstname, $lastname, $email, $password);
header('Location:welcome.html');

function saveToDatabase( $firstname, $lastname, $email, $password ){
    $serverName = "localhost";
    $database = "logincookies";
    $username = "root";
    $password = 'mysql';
    //Open database connection
    $conn = mysqli_connect($serverName, $username, $password, $database);
    // Check that connection exists
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO users (firstname, lastname, email, password, created_at)
        VALUES ('$firstname','$lastname', '$email', ' $password', NOW() )";
    $result = mysqli_query($conn, $sql);
    //Check out for errors 
    if (!$result) {
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    //Close the connection
    mysqli_close($conn);
    }
?>