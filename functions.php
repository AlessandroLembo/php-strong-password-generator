<?php

function rand_password($password_length, $allow_duplicates)
{

    $message = '';

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    $tot_chars = mb_strlen($chars);

    if (empty($password_length)) return 'Inserisci la lunghezza della password';

    while (mb_strlen($message) < $password_length) {
        $rand_index = rand(0, $tot_chars - 1);

        $rand_chars = $chars[$rand_index];

        if ($allow_duplicates || !$allow_duplicates && !str_contains($message, $rand_chars)) {
            $message .= $rand_chars;
        }
    }

    session_start();
    $_SESSION['length-pass'] = $message;

    return true;
}
