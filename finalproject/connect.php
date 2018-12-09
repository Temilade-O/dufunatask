<?php
echo "";
if (isset($_POST['btn-register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $repassword= $_POST['repassword'];


    saveToDatabase($firstname, $lastname, $email, $pwd, $repassword );
}   
        function saveToDatabase($firstname, $lastname, $email, $pwd, $repassword ){
            $serverName = "localhost";
            $database = "journal";
            $username = "root";
            $password = 'mysql';
            //Open database connection
            $conn = mysqli_connect($serverName, $username, $password, $database);
            echo "1";
            // Check that connection exists
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "INSERT INTO users (firstname, lastname, email, pwd, repassword, created_at)
                VALUES ('$firstname','$lastname', '$email', '$pwd', '$repassword', NOW())";
            $result = mysqli_query($conn, $sql);
            echo "1";
            //Check out for errors
            if($result){
                echo "User Created Successfully.";
                header('location:note.html');
            }else{
                die("Error: " . $sql . "<br>" . mysqli_error($conn));
                echo "User Registration Failed";
                
            }
            mysqli_close($conn);
        
        }

?>
 