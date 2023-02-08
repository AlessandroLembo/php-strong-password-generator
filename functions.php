<?php

function rand_password() {
    $password_length = $_GET['password_length'];
    $message = '';

    if(empty($password_length)){
        $message = 'Inserisci la lunghezza della password';
    } else {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $message = 'La lunghezza della password è: ' . substr(str_shuffle($chars), 0 ,$password_length);
    }

    return $message;

}

 
?>   

