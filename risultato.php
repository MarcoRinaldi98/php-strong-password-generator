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

    <div class="container-sm text-center py-5">
        <h1 class="text-body-secondary"> Strong Password Generator </h1>
        <h2 class="text-white">Genera una password sicura </h2>

        <div class="alert alert-primary text-primary fs-5 fw-semibold py-5" role="alert">
            La password generata è: 
            <?php  
                session_start(); 
                echo $_SESSION['password']; 
            ?>
        </div>

        <a href="index.php" class="btn btn-info">TORNA ALLA HOME PAGE</a>
       
    </div>
</body>
</html>