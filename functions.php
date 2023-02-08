<?php

function rand_password()
{
    $message = '';

    if (empty($_GET['password_length'])) {
        $message = 'Inserisci la lunghezza della password';
    } else {
        header('Location: show_password.php');
        $password_length = $_GET['password_length'];
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $message = 'La password generata è: ' . substr(str_shuffle($chars), 0, $password_length);
    }

    return $message;
}
