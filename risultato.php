<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link di collegamento al cdn di bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Titolo della pagina -->
    <title> Strong Password | Result </title>
</head>
<body class="bg-primary">

    <?php
    require __DIR__ . "/functions.php";

    session_start();

    $lettere = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $simboli = '()!?@#$%&*-_+=';
    $numeri = '0123456789';

    if (isset($_SESSION["length"])) {
        $chars = setChars($_SESSION["lettere"], $_SESSION["numeri"], $_SESSION["simboli"],);
        $password = generatePassword($_SESSION["length"], $chars, $_SESSION["repeat"]);
        unset($_SESSION["length"]);
    } else {
        header("Location: ./index.php");
    }
    ?>

    <div class="container-sm text-center py-5">
        <h1 class="text-body-secondary"> Strong Password Generator </h1>
        <h2 class="text-white pb-3">Genera una password sicura </h2>

        <div class="alert alert-primary text-primary fs-5 fw-semibold py-5" role="alert">
            La password generata è: 
            <span class="fs-3">
                <?php  
                    echo $password; 
                ?>
            </span>
        </div>

        <a href="index.php" class="btn btn-info text-white">TORNA ALLA HOME PAGE</a>
       
    </div>
</body>
</html>