<?php
include "includes/session.php";
include "dbconfig/config.php";
error_reporting(~E_ALL);

$id = $_GET['id'];
$query = "select * from students where id='$id'";
$query_run = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($query_run);


$std_name = $_POST['std_name'];
$std_address = $_POST['std_address'];
$std_direccion = $_POST['std_direccion'];
$std_telefono = $_POST['std_telefono'];





if (isset($_POST['update'])) {
    if ($std_img) {
        $update_query = "update students set name='$std_name', address='$std_address', direccion='$std_direccion',
         telefono='$std_telefono";
        mysqli_query($con, $update_query);
        header("Location: view.php");
    } else {
        $update_query = "update students set name='$std_name', address='$std_address', direccion='$std_direccion', 
        telefono='$std_telefono'";
        mysqli_query($con, $update_query);
        header("Location: view.php");
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">

    <style>
        span {
            color: red;
        }
    </style>

</head>

<body>
<?php include "includes/header.php";?>
    <div class="container">
        <div class="card text-dark bg-light m-5">
            <div class="card-header">
                Actualizar registros <a href="view.php">Ver registro</a>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" value="<?php echo $row['name'] ?>" name="std_name">

                    </div>
                    <div class="form-group">
                        <label for="address">Correo</label>
                        <input class="form-control" rows="5" name="std_address"><?php echo $row['address'] ?></input>
                    </div>
                    <div class="form-group">
                        <label for="address">Direccion</label>
                        <input class="form-control" rows="5" name="std_direccion"><?php echo $row['direccion'] ?></input>
                    </div>
                    <div class="form-group">
                        <label for="address">Teléfono</label>
                        <input class="form-control" rows="5" name="std_telefono"><?php echo $row['telefono'] ?></input>
                    </div>
                    <div class="form-group">
                    

                        <input type="submit" class="btn btn-success" name="update" value="Actualizar registro">
                    </div>
                </form>

            </div>
        </div>


    </div>

    <script src="" async defer></script>
</body>

</html>