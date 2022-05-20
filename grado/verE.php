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

    $busca = $_GET["idGrado"];



    try {
        $base = new PDO("mysql:host=localhost;dbname=colegio", "root", ""); //pdo es la clase
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //muestra el tipo de error
        $base->exec("set character set utf8");
        //echo "Conexión exitosa";
        $sql = "SELECT  * from grados   where idGrado=:co";

        $resultado = $base->prepare($sql); //el objeto $base llama al metodo prepare que recibe por parametro la instrucción sql, el metodo prepare devuelve un objeto de tipo PDO que se almacena en la variable resultado
        $resultado->execute(array(":co" => $busca));
        if ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

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
                            <h5 class="card-title pb-2">ID <? echo $registro['idGrado'] ?></h5>
                            <a type="button" class="btn-close" style="position: relative; left:14rem; top:-3rem" href="grados.php"></a>
                            <p class="fw-bold"> Grado: <? echo $registro['grado'] ?></p>

                        </div>
                    </div>
                </div>



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