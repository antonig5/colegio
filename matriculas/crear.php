<?php
session_start();
require_once('../conexion/conexion.php');

if (isset($_POST['idEs'])) {

    $idE = $_POST['idEs'];
    $grado = $_POST['grado'];
    $user = $_POST['user'];


    $sql1 = "INSERT INTO matricula (idEs,idUser,idGrado) values ( ?,?,?)";
    $resultado = $base_de_datos->prepare($sql1); //$base es el nombre de la conexión
    $resultado->execute(array($idE, $user, $grado,));
    echo ('matriculado');
    header("Location:matricular.php?busca=$idE");
} else {
    echo 'fin';
}
