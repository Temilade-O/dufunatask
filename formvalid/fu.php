<?php
$message = '';
if (isset($_POST['submit'])) {
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$country = $_POST['country'];
if (empty($firstname) || empty($email) || empty($phonenumber) || empty($country)) {
$message = 'All fields are required';
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
<h3>A Simple Registration Form</h3>
<?php echo $message; ?>
<h3>Task1-Adding validation to a Simple Signup Form</h3>
    <?php echo $message; ?>
     <form method="POST" action="">
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
                       <input type="submit" class="submit" value = "Submit" style="background-color:purple; color: white"/>
                      
               </form>
</form>
</body>
</html>