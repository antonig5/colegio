<?
include('../menu/headerF.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    require('../conexion/conexion.php');
    $busca = $_GET["idMatri"];



    try {

        $sql = "SELECT  * from matricula  where  idMatri=:co";
        $resultado = $base_de_datos->prepare($sql);
        $resultado->execute(array(":co" => $busca));
        if ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $numero = $registro['idMatri'];

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
                    <div class="card" style="width: 18rem;">

                        <div class="card-body">


                            <form action="enviar.php" method="post" class="mt-3 g-3 text-center">


                                <div class="col-md-3">
                                    <label for="formGroupExampleInput" class="form-label">materia</label>
                                    <select name="idMa" class=" form-select col-auto mx-5" aria-label=" Default select example" style="width: 10rem;">
                                        <?php
                                        $sql1 = "SELECT * FROM materias";
                                        $resultado1 = $base_de_datos->prepare($sql1);
                                        $resultado1->execute(array());
                                        while ($registro1 = $resultado1->fetch(PDO::FETCH_ASSOC)) {
                                        ?>

                                            <option value="<?php echo $registro1['idMa']; ?>"><?php echo $registro1['materia'] ?></option>
                                        <?php
                                        }


                                        ?>
                                    </select>
                                </div>
                                <input type="hidden" value="<?php echo $numero ?>" name="idMatri">

                                <button class="btn btn-primary mt-3 mx-4 " name="mate">Agregar Materia</a>








            </body>

            </html>


    <?php
        } else {
            echo "No existe cliente con cédula $busca";
        }





        $resultado->closeCursor();
    } catch (Exception $e) {
        die("Error: " . $e->GetMessage());
    } finally {
        $base = null; //vaciar memoria
    }


    ?>

    </form>
</body>


</html>