<?php

function rand_password() {
    $password_length = $_GET['password_length'];
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    return substr(str_shuffle($chars), 0 ,$password_length);
    
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- style CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container ps-container">
     <h1 class="text-center pt-5 ps-title-color">Strong Password Generator</h1>
     <h2 class="text-center fs-2">Genera una password sicura</h2>

    <div class="alert alert-info" role="alert">
        Nessun parametro
    </div>
    
    <form action="#" method="GET">
        <div class="d-flex align-items-center justify-content-around">
           <label for="password">Lunghezza password</label>
           <input type="number" min="8" max="16" name="password_length">
        </div>   
        <div>La password generata è: <?= rand_password() ?></div>
        <button>Invia</button>
        
    </form>
     

</div>
</body>
</html>