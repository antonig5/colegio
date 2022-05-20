<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

  <title></title>
</head>

<body>
  <?php
  require("../conexion/conexion.php");

  $id = $_GET["documento"];
  $nombre = $_GET["nombre"];
  $apellido = $_GET["ape"];


  try {
    $sql = "UPDATE estudiantes SET idEs=:dc, Enombre=:no, Eapellido=:ap WHERE idEs=:id";
    $resultado = $base_de_datos->prepare($sql);  //$base guarda la conexión a la base de datos
    $resultado->execute(array(":id" => $id, ":no" => $nombre, ":ap" => $apellido, ":dc" => $id)); //asigno las variables a los marcadores
    header('Location:estudiantes.php');

    $resultado->closeCursor();
  } catch (Exception $e) {
    //die("Error: ". $e->GetMessage());
    echo "F " . $id;
  } finally {
    $base = null; //vaciar memoria
  }


  ?>

</body>

</html>