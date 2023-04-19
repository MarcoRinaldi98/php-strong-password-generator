<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title> Strong Password Generator </title>
</head>
<body class="bg-primary">

    <?php
        session_start();

        require __DIR__ . '/functions.php';

        if (isset($_GET['length']) && $_GET['lenght'] !== '') {
            $length = $_GET['length'];
            $password = generatePassword($length);
        }
    
        $_SESSION['password'] = $password;
    
        if($_SESSION['password'] && $_GET['lenght'] !== ''){
            header('Location: ./risultato.php');
        }
    ?>

    <div class="container-sm text-center py-5">
        <h1 class="text-body-secondary"> Strong Password Generator </h1>
        <h2 class="text-white">Genera una password sicura </h2>

        <form class="container-fluid bg-info-subtle py-3 rounded-2" action="index.php" method="GET">
            <div class="row">
                <div class="col-7 text-start mb-3">
                    <label for="length" class="form-label text-primary fw-semibold">Lunghezza password: </label>
                </div>
                <div class="col-auto mb-3">
                    <input type="text" class="form-control" id="length" name="length">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        
    </div>
</body>
</html>