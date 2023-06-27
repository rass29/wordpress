<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sitio en Construcción</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .image-container {
            width: 75%;
            text-align: center;
        }
        
        .image-container img {
            max-width: 75%;
            height: auto;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="./assets/imagen.png" alt="Imagen">
            <form action="login.php">
            <div class="form-group">
                <input type="submit" class="btn btn-success" name="ir" value="Registrate o Inicia sesión">
                </div>
            </form>
        </div>
    </div>
</body>
</html>