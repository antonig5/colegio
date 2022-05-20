<?php
require('../conexion/conexion.php');


$id = $_GET['idMa'];
$eliminar = ("Delete from materias where idMa=?");
$sentencia = $base_de_datos->prepare($eliminar);
$sentencia->execute(array($id));


header('Location:materias.php');
