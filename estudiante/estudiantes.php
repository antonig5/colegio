<?php
session_start();

require('../conexion/conexion.php');
$busqueda = $base_de_datos->query("SELECT * FROM estudiantes ");
/*Almacenamos el resultado de fetchAll en una variable*/
$arrDatos = $busqueda->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST['agregar'])) {

    $nombre = $_POST['Enombre'];
    $apellido = $_POST['Eapellido'];
    $id = $_POST['id'];


    $sql = "INSERT INTO estudiantes(idEs,Enombre,Eapellido) values (?, ?,?)";
    $resultado = $base_de_datos->prepare($sql); //$base es el nombre de la conexión
    $resultado->execute(array($id, $nombre, $apellido));

    header("Location:estudiantes.php");
}


?>
<? include('../menu/header.php') ?>
<!DOCTYPE html>
<html lang="en" class="wrapper" id="pages">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <title>Document</title>
</head>

<body>
    <div id="page" class="wrapper">
        <div class="table-responsive">
            <table class="table ">

                <th class="bg-primary bg-bordered" scope="col">Id</th>
                <th class="bg-primary" scope="col">Estudiante</th>
                <th class="bg-primary" scope="col"> Action</th>




</body>



<?php

/* var_dump($arrDatos);*/
/*Recorremos todos los resultados, ya no hace falta invocar más a fetchAll como si fuera fetch...*/
foreach ($arrDatos as $muestra) {

?>
    <tr>

        <td> <?php echo $muestra['idEs'] ?> </td>
        <td> <?php echo $muestra['Enombre'] ?> <?php echo $muestra['Eapellido'] ?> </td>

        <td>
            <a href="verE.php?idEs=<?php echo $muestra['idEs'] ?> " class="btn btn-primary">
                ver
            </a>
            <a href="form.php?idEs=<?php echo $muestra['idEs'] ?> " class="btn btn-primary">
                Editar
            </a>
            <a href="deleteE.php?idEs=<?php echo $muestra['idEs'] ?> " class="btn btn-primary">
                Eliminar
            </a>





        </td>
    </tr>
<?php
}
?>

</table>
<tr>
    <form action="" method="post" class="row g-3 mx-5">
        <input type="number" name="id" placeholder="Documento" width="2px" class="form-control col-md-1 me-5" maxlength="10">
        <input type="text" name="Enombre" placeholder="Nombre" width="2px" class="form-control col-md-1 me-5">
        <input type="text" name="Eapellido" placeholder="Apellido" class="form-control col-md-1 me-5">
        <input type="submit" name="agregar" class="btn btn-primary col-md-1 mx-3" value="Agregar">
    </form>

</tr>

<script src="../indexjs/app.js"></script>

</html>