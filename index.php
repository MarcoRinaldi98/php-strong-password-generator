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
        function generatePassword($length)
        {
            $caratteri = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789()!?@#$%&*-_+=';
            $password = '';
            for ($i = 0; $i < $length; $i++) {
                $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
            }
            return $password;
        }

        if (isset($_GET['length'])) {
            $length = $_GET['length'];
            $password = generatePassword($length);
        }
    ?>

    <div class="container-sm text-center py-5">
        <h1 class="text-body-secondary"> Strong Password Generator </h1>
        <h2 class="text-white">Genera una password sicura </h2>

        <form class="container-fluid bg-info-subtle py-3 rounded-2" action="index.php" method="GET">
            <div class="row">
                <div class="col-7 text-start mb-3">
                    <label for="length" class="form-label text-primary">Lunghezza password: </label>
                </div>
                <div class="col-auto mb-3">
                    <input type="text" class="form-control" id="length" name="length">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <?php if (isset($password)) { ?>
            <div class="alert alert-primary text-warning-emphasis" role="alert">
                La password generata è: <?php echo $password; ?>
            </div>
        <?php } ?>
        
    </div>
</body>
</html>