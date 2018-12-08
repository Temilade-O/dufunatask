<?php
    setcookie("name", "John Watkin", time()+3600, "/","", 0);
    setcookie("age", "36", time()+3600, "/", "", 0);
?>

<html>

    <head>
        <title>Setting Cookies with PHP</title>
</head>

<body>
    <?php echo "Set Cookies"."<br />";?>
    <?php echo $_COOKIE["name"]."<br />";?>
    <?php echo $_COOKIE["age"]."<br />";?>
    <a href= "cookies_page2.php">Move to Welcome page</a>

</body>

<html>
    
