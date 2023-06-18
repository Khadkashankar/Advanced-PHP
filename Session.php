<?php

session_start();

//set the session
// $_SESSION['username'] = "Shankar";
// $_SESSION['password'] = "hithisisshankar";

//get the session
echo  $_SESSION['username']."<br>";
echo  $_SESSION['password']."<br>";

if(isset($_SESSION['username']))
{
    echo "Session Variable Set<br>";
}
else{
    echo "Session Variable not Set<br>";

}

?>