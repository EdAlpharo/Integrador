<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Unidades</title>
    <link rel="icon" href="img/delivery.png" type="image/png" size="64x64">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <div class="container col-auto bg-dark">
        <nav class="navbar navbar-expand-lg m-0 p-0 navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand col-0 text-light" href="#">SIR-A</a>
            <div class="collapse navbar-collapse col-auto" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item col-lg-3">
                        <a class="nav-link text-light text-center" href="registroOP.php">Registrar operador</a>
                    </li>
                    <li class="nav-item col-lg-3 text-center">
                        <a class="nav-link text-light" href="registroUnidad.php">Registrar Unidad</a>
                    </li>
                    <li class="nav-item col-lg-3 text-center">
                        <a class="nav-link text-light" href="BitOperadorAd.php">Informes</a>
                    </li>
                    <li class="nav-item col-lg-3 text-center">
                        <a class="nav-link text-light" href="asignar_viaje.php">Asignar Viajes</a>
                    </li>
                    <li class="nav-item col-lg-3 text-right">
                        <a class="nav-link text-light" href="InicioAdmin.php">Salir</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</head>

<body class="body">
    <div class="container">
        <div class="mt-0 text-white">
            <h2 class=" text-center p-0">Registro de Unidades</h2>
        </div>
        <div class="row">
            <form action="registroUnidad.php" method="POST" class="p-3 m-0 col-12 mb-1" id="formUnidad" enctype="multipart/form-data">
                <div class="col-12 p-0 text-center">
                    <div class="pt-5 col-4 float-right">
                        <div class=" form-group row-1 col-1 pl-5 ml-lg-5">
                            <img src="../img/delivery.png" width="150px" height="150px" class="" alt=" no se ha podido cargar la imagen">
                        </div>
                        <div class="form-group row-1 pt-2 text-white">
                            <label for="picture1">Agregar imagen: </label>
                            <input type="file" name="picture1" class="form-control bg-transparent text-white" id="picture1" required>
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <label for="Marca" class="mr-2 text-white text-left">Marca: </label>
                        <input type="text" id="Marca" name="marca" class=" form-control-sm float-right" placeholder="Marca" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="Modelo" class="mr-2 text-white text-left">Modelo: </label>
                        <input type="text" id="Modelo" name="modelo" class=" form-control-sm float-right" placeholder="Modelo" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="Placas" class="mr-2 text-white text-left">Placas: </label>
                        <input type="text" id="Placas" name="placas" class=" form-control-sm float-right" placeholder="Placas" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="NumSerie" class="mr-2 text-white text-left">Num. Serie: </label>
                        <input type="text" id="NumSerie" name="numero_serie" class=" form-control-sm float-right" placeholder="Num.  Serie" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="ConfiguracionEje" class="mr-2 text-white text-left">Configuracion de ejes: </label>
                        <input type="text" id="ConfiguracionEje" name="ejes" class=" form-control-sm float-right" placeholder="Configuracion de ejes" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="Largo" class="mr-2 text-white text-left">Largo: </label>
                        <input type="text" id="Largo" name="largo" class=" form-control-sm float-right" placeholder="Largo" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="Alto" class="mr-2 text-white text-left">Alto: </label>
                        <input type="text" id="Alto" name="alto" class=" form-control-sm float-right" placeholder="Alto" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="Ancho" class="mr-2 text-white text-left">Ancho: </label>
                        <input type="text" id="Ancho" name="ancho" class=" form-control-sm float-right" placeholder="Ancho" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="PesoB" class="mr-2 text-white text-left">Peso bruto Maximo: </label>
                        <input type="text" id="PesoB" name="peso" class=" form-control-sm float-right" placeholder="Peso bruto Maximo" required>
                    </div>
                    <div class="col-2 pt-0">
                        <div class="form-check">
                            <label class="mr-2 text-white text-left " for="gridCheck">Refrigerado: </label>
                            <input class="form-check-input float-right col-4" name="refrigerado" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label col-3 text-white" for="gridCheck">
                                Si
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                </div>
                <div class="form-group mb-0">
                    <button type="submit" name="AgregarUnidad" class="btn btn-sm btn-success p-1 col-0" id="Agregar">agregar</button>
                    <button type="submit" name="Eliminar" class="btn btn-sm btn-danger p-1" id="Eliminar" disabled>Eliminar</button>
                    <button type="submit" name="Actualizar" class="btn btn-sm btn-warning p-1" id="Actualizar" disabled>Actualizar</button>
                </div>
                <hr class="hr" />
                <div class="p-0 ml-2 mb-0 row">
                    <input class="form-control mb-0 col-3 mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class=" btn btn-sm btn-success my-2 my-sm-0 float-right mb-0" type="submit" id="Buscar">Buscar</button>
                </div>

            </form>
        </div>
    </div>
</body>
<?php
if (isset($_POST['AgregarUnidad'])) {
    require "../FuncionesBD.php";
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $numero_serie = $_POST['numero_serie'];
    $ejes = $_POST['ejes'];
    $placas = $_POST['placas'];
    $alto = $_POST['alto'];
    $ancho = $_POST['ancho'];
    $largo = $_POST['largo'];
    $peso = $_POST['peso'];
    if (!empty($_POST['refrigerado'])) {
        $refri = TRUE;
    } else {
        $refri = FALSE;
    }


    $image = $_FILES['picture1']['name'];
    $tipo_imagen = $_FILES['picture1']['type'];
    $tamaño_imagen = $_FILES['picture1']['size'];
    $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/Integrador/UnidadesIMG/';
    $foto = "../Unidades/" . $image;

    if ($tamaño_imagen <= 3000000) {
        if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png") {
            $status = addUnidad($marca, $modelo, $placas, $numero_serie, $ejes, $largo, $ancho, $alto, $peso, $refri, $foto);
            if ($status == 1) {
                echo "<script>alert('Se ha realizado el registro de Unidad correctamente ');</script>";
                move_uploaded_file($_FILES['picture1']['tmp_name'], $carpeta . $image);
            } else {
                echo "<script>alert('No se ha podido realizar el registro de Unidad ');</script>";
            }
        } else {
            echo "<script>alert('La el archivo que intenta subir no es una imagen'); </script>";
        }
    } else {
        echo "<script>alert('La iamagen que intenta subir es demasiado grande ');</script>";
    }
}


if (isset($_GET['buscarOP'])) {
    $buscar = $_POST['buscador'];
}

?>

</html>