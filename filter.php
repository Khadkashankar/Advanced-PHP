<?php

if(isset($_REQUEST['submit'])){
    if(filter_has_var(INPUT_POST,'username'))
    {
        echo "Name found";
    }
    else{
        echo "Name not found";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="username" id="name">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>