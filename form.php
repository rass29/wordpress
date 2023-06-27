<?php
include "includes/session.php";
include "dbconfig/config.php";
error_reporting(~E_ALL);

$std_name = $_POST['std_name'];
$std_address = $_POST['std_address'];
$std_direccion = $_POST['std_direccion'];
$std_telefono = $_POST['std_telefono'];
// sessions
$_SESSION['std_name'] = $std_name;
$_SESSION['std_address'] = $std_address;
$_SESSION['std_direccion'] = $std_direccion;
$_SESSION['std_telefono'] = $std_telefono;
// sessions end
if (isset($_POST['submit'])) {

        if (empty($std_name)) {
                $std_name_err = "Field is required";
        } else if (empty($std_address)) {
                $std_address_err = "Field is required";
        } else {

                $result = mysqli_query($con, "insert into students (name, address, direccion, telefono)
                values('$std_name', '$std_address', '$std_direccion', '$std_telefono')");
                if ($result) {
                        // success status
                        $status = "Form submitted";
                        $_SESSION['status'] = $status;
                        header("Location: form.php");
                } else {
                        echo "Error in query";
                }
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
        <?php include "includes/header.php"; ?>
        <div class="container">
                <div class="card text-dark bg-light m-5">
                        <div class="card-header">
                                Usuario <a href="view.php">Ver registro</a>
                        </div>
                        <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                                <label for="name">Nombre</label>
                                                <input type="text" class="form-control" value="<?php echo $_SESSION['std_name']; ?>" name="std_name">
                                                <span> <?php echo $std_name_err; ?> </span>
                                        </div>
                                        <div class="form-group">
                                                <label for="address">Correo</label>
                                                <input class="form-control" rows="5" name="std_address"></input>
                                                <span> <?php echo $std_address_err; ?> </span>
                                        </div>
                                        <div class="form-group">
                                                <label for="address">Direccion</label>
                                                <input class="form-control" rows="5" name="std_direccion"></input>
                                                
                                        </div>
                                        <div class="form-group">
                                                <label for="address">Telefono</label>
                                                <input class="form-control" rows="5" name="std_telefono"></input>
                                                
                                        </div>
                                        <div class="form-group">

                                                <input type="submit" class="btn btn-success" name="submit" value="Guardar">
                                        </div>
                                </form>

                        </div>
                </div>


        </div>

        <script src="" async defer></script>
</body>

</html>