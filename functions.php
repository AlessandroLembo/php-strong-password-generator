<?php
function rand_password() {
    $password_length = $_GET['password_length'];
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    return substr(str_shuffle($chars), 0 ,$password_length);
    
    }

?>    