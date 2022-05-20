<?php
require('../conexion/conexion.php');


$id = $_GET['idEs'];
$eliminar = ("Delete from estudiantes where idEs=?");
$sentencia = $base_de_datos->prepare($eliminar);
$sentencia->execute(array($id));


header('Location:estudiantes.php');
