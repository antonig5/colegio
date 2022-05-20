<?php
require('../conexion/conexion.php');


$id = $_GET['idGrado'];
$eliminar = ("Delete from grados where idGrado=?");
$sentencia = $base_de_datos->prepare($eliminar);
$sentencia->execute(array($id));


header('Location:grados.php');
