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
    
    <form action="" method="GET">
        <div class="row">
           <label for="password" class="col-5">Lunghezza password</label>
           <input type="number" min="1" max="16" name="password" class="col-5">
        </div>   
        <button>Invia</button>
        
    </form>
     

</div>
</body>
</html>