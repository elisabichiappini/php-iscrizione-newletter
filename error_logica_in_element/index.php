<?php

require_once __DIR__ . '/./functions.php';

//variabile per errore nulla
$error = NULL;
//variabile mail vuota
$email = '';

//verifica se il parametro esiste e se ha contenuto salvalo in variabile
if(!empty($_POST['mail'])) {
    $email = $_POST['mail'];
    
    //verifica se la mail è scritta correttamente
    if(checkAlert($email)) {
        $error = false;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
    <!--CDN CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--/CDN CSS Bootstrap-->
</head>
<body class="bg-success-subtle pt-5">
    <!--intestazione-->
    <header>
    <h1 class="text-center">Accedi SitoBello</h1>
    </header>
    <!-- /intestazione-->
    <!--corpo-->
    
    <main class="container">
        <!--form-->
        <form action="index.php" method="POST" class="row align-items-center justify-content-center">
            <div class="mb-3">
                <label for="mailInput" class="form-label">Registrati alla newsletter</label>
                <input type="text" class="form-control" id="mailInput" placeholder="Inserisci la tua email..." name="mail" value="<?php echo $email; ?>">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Confirm identity</button>
            </div>
        </form>
        <!--validazione mail-->

            <!--gestione errore mail-->
            <?php if($error !== NULL ) : ?>
                <div class="alert alert-<?php if($error=== true) : ?>danger<?php else : ?>success<?php endif ; ?> mt-3" role="alert">
                    <?php if($error === true) : ?>Email not valide!<?php else : ?> Email valide!<?php endif ; ?>
                </div>
            <!--gestione errore mail-->
            <?php endif ; ?>
        </div>
        <!--validazione mail-->
        <!--form-->
    </main>
    <!-- /corpo-->
    <!--CDN JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--/CDN JS Bootstrap-->
</body>
</html>