<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
</head>
<body>
    <!--intestazione-->
    <header>
        <h1>Sito Bello</h1>
    </header>
    <!-- /intestazione-->
    <!--corpo-->
    <main class="container">
        <!--form-->
        <form action="#" method="POST">
            <div>
                <label for="inputMail">Iscrizione alla newsletter</label>
                <input type="email" id="inputMail" placeholder="name@example.com" name="mail">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
        <div class="esito">
            <h4><?php echo $_POST['mail'];?></h4>
        </div>
        <!--form-->
    </main>
    <!-- /corpo-->
</body>
</html>