<?php
    $message = '';
        if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];
        $confirm_password= $_POST['confirm_password'];
        $phonenumber = $_POST['phonenumber'];
        $gender=  $_POST['gender'];
        $country = $_POST['country'];
     if (empty($firstname) || empty($lastname) || empty($email) || empty($passw) || empty($confirm_password) || empty($phonenumber) || empty($gender) || empty($country)){
            $message = '<p class="error">All fields are required</p>';
        }

    if (strlen($firstname) < 3 || strlen($firstname) > 18) {
        $message .= '<p class="error">Full name must be between 3 and 20 characters</p>';
        }
    if (strlen($lastname) < 3 || strlen($lastname) > 18) {
        $message .= '<p class="error">Full name must be between 3 and 20 characters</p>';
        }
    if (!is_numeric($phonenumber)) {
        $message .= '<p class="error">Phone number should be numeric</p>';
        }
    if (strlen($phonenumber) != 11) {
        $message .= '<p class="error">Phone number should be 11 digits long</p>';
        }
    if ($_POST["passwd"] === $_POST["confirm_password"]) {
         $message .= '<p class="error">password confirmed<p>';  
         }
         else {
         $message .= 'password not correct';  
         }
    if (empty($message)) {
        $message = '<p class="success">All inputs are valid, thank you</p>';
        }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<style>
    .error {
    color: red;
    }
    .success {
    color: green;
    }
</style>
</head>
<body>
    <h3>Task1-Adding validation to a Simple Signup Form</h3>
    <?php echo $message; ?>
     <form method="POST" action="">
     <fieldset>
                        <label for="firstname">Firstname:</label>
                        <input type="text" name="firstname" id="firstname" />
                        <br/>
                        <label for="lastname">Lastname:</label>
                       <input type="text" name="lastname" id="lastname" />
                        <br/>
                       <label for="email">E-mail:</label>
                       <input type="email" name="email" id="email"/>
                       <br/>
                       <label for="password">Password:</label>
                       <input type="password" name="passwd" id="passwd" />
                       <br/>
                       <label for="confirm_password">Confirm Password:</label>
                       <input type="password" name="confirm_password" id="confirm_password" />
                       <br/> 
                       <label for="phonenumber">Phone Number:</label>
                       <input type="tel" name="phonenumber" id="phonenumber" />
                      
                       <br/>
                       <fieldset>
                       <label for="gender">Gender:</label>
                       <input type="radio" name="gender" id="gender" value="female"/>Female
                       <input type="radio" name="gender" id="male" value="male"/>Male
                       </fieldset>
                       <br/>
                       <label for="country">Country:</label>
                       <select name="country" id="country" style="width:100%">
                           <option value="nigeria">Nigeria</option>
                           <option value="ghana">Ghana</option>
                           <option value="kenya">Kenya</option>
                           <option value="senegal">Senegal</option> 
                           <option value="egypt">Egypt</option>     
                           <option value="cameroun">Cameroun</option>
                           <option value="uganda">Uganda</option>         
                       </select>
                   
                       <br/>
                       <input type="submit" name="submit" value = "Submit" id="submit" style="background-color:purple; color: white"/>
              </fieldset>        
               </form>
     
</body>
</html>