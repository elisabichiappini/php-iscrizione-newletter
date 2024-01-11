<?php
// funzione per condivisione dati tra pagine;
session_start();

// condizione per visualizzare il messaggio con la mail
if(!isset($_SESSION['email'])) {
    $_SESSION['email'] = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvenuti Sito Bello</title>
    <!--CDN CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--/CDN CSS Bootstrap-->
</head>
<body>
    <p class="text-center">L'iscrizione alla newsletter è andata a buon fine! Sei registrato con la mail <?php echo $_SESSION['email']; ?></p>
    <!--CDN JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--/CDN JS Bootstrap-->
</body>
</html>