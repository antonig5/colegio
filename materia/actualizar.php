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
    $sql = "UPDATE materias SET  materia=:no, horas=:ap WHERE idMa=:id";
    $resultado = $base_de_datos->prepare($sql);  //$base guarda la conexión a la base de datos
    $resultado->execute(array(":no" => $nombre, ":ap" => $apellido, ":id" => $id)); //asigno las variables a los marcadores
    header('Location:materias.php');

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