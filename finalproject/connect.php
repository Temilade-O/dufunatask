<?php
$message = '';
if (isset($_POST['btn-register'])) {
    //All validation scripts go here
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $repassword= $_POST['repassword'];


    }

    header('location:note.html');

    saveToDatabase($firstname, $lastname, $email, $pwd, $repassword );

        

        function saveToDatabase($firstname, $lastname, $email, $pwd, $repassword ){
            $serverName = "localhost";
            $database = "memoir";
            $username = "root";
            $password = 'mysql';
            //Open database connection
            $conn = mysqli_connect($serverName, $username, $password, $database);
            // Check that connection exists
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "INSERT INTO user (firstname, lastname, email, pwd, repassword, created_date)
                VALUES ('$firstname','$lastname', '$email', ' $pwd', '$repassword', NOW())";
            $result = mysqli_query($conn, $sql);
            //Check out for errors
            if($result){
                $smsg = "User Created Successfully.";
            }else{
                $fmsg ="User Registration Failed";
            }
            
        }


?>