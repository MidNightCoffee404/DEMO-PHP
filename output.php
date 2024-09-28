<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];




/*    if(trim($username) != ""){
        echo "Field is Complete";
    } else {
        echo "Username Field Is Empty";
    }

    if(trim($email) != ""){
        echo "Field is Complete";
    } else {
        echo "Email Field Is Empty";
    }

    if(trim($password) != ""){
        echo "Field is Complete";
    } else {
        echo "Password Field Is Empty";
    }

    if(trim($confirm_password) != ""){
        echo "Field is Complete";
    } else {
        echo "Confirm Password Field Is Empty";
    }

} */

?>