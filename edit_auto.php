<?php
session_start();
include('config.php');
include_once 'class/automoviles.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
$crud = new crud($conn);
//validacion del boton actualizar
if (isset($_POST['btn-update'])) {
    $id = $_GET['auto_id'];
    $matricula = $_POST['matricula'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $color = $_POST['color'];
    $precio = $_POST['precio'];
    //hace referencia a la funcion update
    if ($crud->update($id, $matricula, $marca, $modelo, $color, $precio)) {
        $msg = "¡Registro actualizado con éxito!";
        $type = "success";
    } else {
        $msg = "¡Ocurrió un error al intentar actualizar el registro!";
        $type = "danger";
    }
}
if (isset($_GET['auto_id'])) {
    $id = $_GET['auto_id'];
    extract($crud->getID($id));
}
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
    <title>Editar automóvil</title>
</head>

<body>

    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-6 p-4 bg-white shadow-lg rounded">
                <?php
                if (isset($msg)) {
                    echo "<div class='alert alert-$type alert-dismissible fade show' role='alert'>
                          $msg
                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                }
                ?>
                <h5>Actualizar automóvil</h5>
                <form method="post">
                    <div class="form-group mt-2">
                        <label for="matricula">Matrícula</label>
                        <input
                                id="matricula"
                                value="<?php echo $matricula; ?>"
                                class="form-control"
                                type="text"
                                name="matricula"
                                placeholder="Ingrese el número de matrícula del automóvil"
                                required
                        >
                    </div>
                    <div class="form-group mt-2">
                        <label for="marca">Marca</label>
                        <input
                                id="marca"
                                value="<?php echo $marca; ?>"
                                class="form-control"
                                type="text"
                                name="marca"
                                placeholder="Ingrese la marca del automóvil"
                                required
                        >
                    </div>
                    <div class="form-group mt-2">
                        <label for="modelo">Modelo</label>
                        <input
                                id="modelo"
                                value="<?php echo $modelo; ?>"
                                class="form-control"
                                type="text"
                                name="modelo"
                                placeholder="Ingrese el modelo del automóvil"
                                required
                        >
                    </div>
                    <div class="form-group mt-2">
                        <label for="color">Color</label>
                        <input
                                id="color"
                                value="<?php echo $color; ?>"
                                class="form-control"
                                type="text"
                                name="color"
                                placeholder="Ingrese el color del automóvil"
                                required
                        >
                    </div>
                    <div class="form-group mt-2">
                        <label for="precio">Precio</label>
                        <input
                                id="precio"
                                value="<?php echo $precio; ?>"
                                class="form-control"
                                type="number"
                                name="precio"
                                placeholder="Ingrese el precio del automóvil"
                                required
                        >
                    </div>
                    <div class="mt-3">
                        <a href="admin_autos.php" class="btn btn-secondary">Cancelar</a>
                        <button class="btn btn-warning text-white" name="btn-update" type="submit">Actualizar</button>
                    </div>
                </form>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
