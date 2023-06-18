<?php
$cookie_name = "user_email";
if(isset($_REQUEST['set'])){
    $cookie_value =$_REQUEST['email'];
    $cookie_expiry = time()+60*60*42*1;
    setCookie($cookie_name, $cookie_value, $cookie_expiry);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP Cookie </title>
</head>

<body>
    <h1>Cookies</h1>
    <form action="" method="post">
        Email: <input type="email" name="email"><br><br>
        <input type="submit" value="submit" name="set">
    </form>
    <hr>
    <?php
    if(isset($_COOKIE[$cookie_name])){
     echo "Cookie Name is ".$cookie_name." and Value is ".$_COOKIE[$cookie_name]."<br>";
    }
    else{
        echo "cookie not set";
    }
    ?>
</body>

</html>