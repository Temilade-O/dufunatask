<?php  //Start the Session
echo "";
if (isset($_POST['btn-login'])) {
session_start();
    //3. If the form is submitted or not.
        //3.1 If the form is submitted
       
        //3.1.1 Assigning posted values to variables.
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

   

        //3.1.2 Checking the values are existing in the database or not
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
        $sql = "SELECT * FROM `users` WHERE email='$email' and pwd='$pwd'";
        
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);
     

        //3.1.2 If the posted values are equal to the database values, then session will be created for the user.
        if ($count == 1){
        $_SESSION['email'] = $email;
        
        }else{
        //3.1.3 If the login credentials doesn't match, he will be shown with an error message.
        echo "Invalid Login Credentials.";
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
        echo "<a href='note.html'>Welcome . $email</a>";
        }

?>

