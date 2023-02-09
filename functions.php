<?php

// function rand_password()
// {
//     $message = '';

//     if (empty($_GET['password_length'])) {
//         $message = 'Inserisci la lunghezza della password';
//     } else {
//         session_start();

//         $SESSION['length_pass'] = true;

//         header('Location: show_password.php');
//         $password_length = $_GET['password_length'];
//         $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
//         $message = 'La password generata è: ' . substr(str_shuffle($chars), 0, $password_length);
//     }

//     return $message;
// }

function rand_password($password_length)
{

    $message = '';
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    $tot_chars = mb_strlen($chars);

    while (mb_strlen($message) < $password_length) {
        $rand_index = rand(0, $tot_chars - 1);

        $rand_chars = $chars[$rand_index];

        $message .= $rand_chars;
    }

    return $message;
}

if (isset($_GET['password_length'])) {
    $password = rand_password($_GET['password_length']);
}
