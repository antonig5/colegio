<?php
    require("../conexion/conexion.php");
if (isset($_POST['mate'])) {
    $id = $_POST["idMatri"];
    $nombre = $_POST["idMa"];

    $sql = "INSERT INTO detallematricula(idMatri,idMa) VALUES(?,?)";
    $resultado = $base_de_datos->prepare($sql);  //$base guarda la conexión a la base de datos
    $resultado->execute(array($id,$nombre)); //asigno las variables a los marcadores
    header('Location:matricular.php');
    # code...
}
    
    
?>

   
