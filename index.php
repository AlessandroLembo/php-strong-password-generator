<?php

require __DIR__ . '/functions.php';

if (isset($_GET['password_length'])) {

    $allow_duplicates = $_GET['allow-dupli'] || false;

    $password = rand_password($_GET['password_length'], $allow_duplicates);

    if ($password === true) {
        header('Location: show_password.php');
    }
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

</head>

<body>
    <div class="container bg-dark-subtle vh-100 p-5">
        <h1 class="text-center pt-5 fs-1">Strong Password Generator</h1>
        <h2 class="text-center fs-2">Genera una password sicura</h2>

        <?php if (isset($password)) : ?>
            <div class="alert alert-danger my-5" role="alert">
                <div class="fs-3"><?= $password ?></div>
            </div>
        <?php endif ?>

        <form action="" method="GET" class="bg-warning-subtle py-5 px-3 rounded-2">
            <div class="row mb-3 align-items-center">
                <label for="inputEmail3" class="col-sm-8 col-form-label fs-3">Lunghezza Password:</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="inputEmail3" min="8" max="16" name="password_length">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-8 pt-0 fs-3">Consenti ripetizioni di uno o più caratteri:</legend>
                <div class="col-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="allow-dupli" id="gridRadios1" checked value="1">
                        <label class="form-check-label" for="gridRadios1">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="allow-dupli" id="gridRadios2" value="0">
                        <label class="form-check-label" for="gridRadios2">
                            No
                        </label>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary mt-5 px-4 py-2">Invia</button>

        </form>

    </div>
</body>

</html>