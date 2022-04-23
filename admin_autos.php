<?php
session_start();
include('config.php');
include_once 'class/automoviles.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
$crud = new crud($conn);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php require_once "menu.php" ?>
    <title>Automóviles</title>
</head>

<body>
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="fw-bolder fs-5">
                Listado de automóviles
            </div>
            <a href="new_auto.php" class="btn btn-primary">
                Nuevo
            </a>
        </div>

        <table id="usuarios" class="display table table-bordered table-stripe mt-4">
            <tr>
                <th>ID</th>
                <th>Matrícula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Precio</th>
                <th></th>
            </tr>
            <tbody>
                <?php
                $query = "SELECT * FROM automovil";
                $crud->dataview($query)
                ?>

            </tbody>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
