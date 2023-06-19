<?php
//Validate email using filter
// $email = 'name@gmail.com';
//sanitize email using filter
$email = 'name///@gmail()().com';

$vemail = filter_var($email, FILTER_SANITIZE_EMAIL);
// $vemail = filter_var($email, FILTER_VALIDATE_EMAIL);

echo "email is ".$vemail;

// if($vemail == FALSE){
//     echo "invalid email<br>";
// }
// else{
//     echo $vemail." is valid email";
// }
?>