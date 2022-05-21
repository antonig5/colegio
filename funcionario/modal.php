<?php

require("../conexion/conexion.php");




$modi = $_GET['idMatri'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color: #3e8ef7;">
    <div class="row justify-content-center mt-5">
        <div class="card" style="width: 40rem;">

            <div class="card-body">
                <form method="get">
                    <table class="table table-success table-striped">

                        <tr>
                            <td>
                                <table align="center">

                        </tr>
                        <?php

                        require("../conexion/conexion.php");
                        session_start();

                        //consuta el último número de matricula generado
                        $sql = "SELECT * FROM matricula WHERE idMatri= :co";
                        $resultado = $base_de_datos->prepare($sql);
                        $resultado->execute(array(":co" => $modi));
                        $registro = $resultado->fetch(PDO::FETCH_ASSOC);
                        $numatricula = $registro['idMatri'];
                        //consulta los datos  de la última matricula generada
                        $sql = "SELECT  * from matricula where idMatri=:nm";
                        $resultado = $base_de_datos->prepare($sql);
                        $resultado->execute(array(":nm" => $numatricula));
                        $registro = $resultado->fetch(PDO::FETCH_ASSOC);
                        $idestudiante = $registro['idEs'];

                        $usuario = $registro['idUser'];
                        //consultar datos del estudiante que corresponde a la última matricula generada
                        $sql = "SELECT * from estudiantes where idEs=:id";
                        $resultado = $base_de_datos->prepare($sql);
                        $resultado->execute(array(":id" => $idestudiante));
                        $registro = $resultado->fetch(PDO::FETCH_ASSOC);

                        ?>

                        <tr>
                            <td colspan="2">
                            <td><b>Matricula N° <?php echo $numatricula ?></b></td>
                            </td>
                        </tr>



                        </tr>

                        <tr>
                            <td colspan="2">Identificación: <?php echo $registro['idEs'] ?></td>
                        </tr>
                        <tr>
                            <td>Estudiante: <?php echo $registro['Enombre'] ?> <?php echo $registro['Eapellido'] ?></td>

                        </tr>


                        <?php
                        $sql = "SELECT  * from usuarios where idUser=:iu";
                        $resultado = $base_de_datos->prepare($sql);
                        $resultado->execute(array(":iu" => $usuario));
                        $registrou = $resultado->fetch(PDO::FETCH_ASSOC);

                        ?>
                        <tr>
                            <td>Funcionario: <?php echo $registrou['nombre']; ?> <?php echo $registrou['apellido']; ?></td>
                        </tr>

                    </table>


                    <table class="table table-success table-striped">
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Horas</th>
                        <tr>
                            <?php
                            //consulta a la tabla detallefactura
                            $registrosdet = $base_de_datos->query("SELECT * from detallematricula where idMatri=$numatricula ")->fetchALL(PDO::FETCH_OBJ);
                            $cuenta = 0;
                            foreach ($registrosdet as $materia) : ?>
                                <td><?php echo $materia->idMa ?></td>
                                <?php
                                $codigom = $materia->idMa;



                                //consulto el nombre de la materia en la tabla materia
                                $sql = "SELECT materia, horas  from materias where idMa=:co";
                                $resultado = $base_de_datos->prepare($sql);
                                $resultado->execute(array(":co" => $codigom));
                                $registrom = $resultado->fetch(PDO::FETCH_ASSOC);

                                ?>

                                <td><?php echo $registrom['materia']; ?></td>
                                <td><?php echo $registrom['horas']; ?></td>
                                <?php
                                $cuenta = $cuenta + 1
                                ?>
            </div>
            </td>
            </tr>

        <?php
                            endforeach;

        ?>
        <tr>
            <td colspan="4">
                <div style='text-align:right'>Total materias: <?php echo " ", $cuenta; ?></div>
        </div>
        </td>
        </td>
        </tr>
        </table>


        </td>
        </tr>
        </table>
        </form>
</body>

</html>