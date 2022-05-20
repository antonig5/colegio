<?php
include('../menu/headerF.php');
require('../conexion/conexion.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="matricular.php" method="get" class="mt-5">
        <div class="row justify-content-center mb-3 ">
            <div class="col-md-3">
                <input class="form-control me-2" type="search" placeholder="Documento Estudiante" aria-label="Search" name="busca">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </div>
    </form>

</body>

</html>