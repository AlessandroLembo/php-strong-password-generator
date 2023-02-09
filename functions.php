<?php

function rand_password($password_length, $allow_duplicates)
{

    $message = '';

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    // calcolo la lunghezza della stringa di caratteri
    $tot_chars = mb_strlen($chars);

    // Stampo un messaggio se non ho inserito di quanto deve essere lunga la password
    if (empty($password_length)) return 'Inserisci la lunghezza della password';

    // ciclo while che si chiude la somma dei caratteri generati eguaglia la lunghezza della password impostata
    while (mb_strlen($message) < $password_length) {
        // funzione per generare un indice casuale
        $rand_index = rand(0, $tot_chars - 1);

        // salvo in una variabile un carattere con indice casuale
        $rand_chars = $chars[$rand_index];

        // In base a ciò che ho selezionato controllo se inserire il carattere generato nella password
        if ($allow_duplicates || !$allow_duplicates && !str_contains($message, $rand_chars)) {
            $message .= $rand_chars;
        }
    }

    session_start();
    $_SESSION['length-pass'] = $message;

    return true;
}
