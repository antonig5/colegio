<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.jpg" alt="" width="100" height="27" class="d-inline-block align-text-top">
                Los Andes
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../admin/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuarios.php">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../estudiante/estudiantes.php">Estudiantes</a>
                    </li>

                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Matriculas
                                </a>
                                <ul class="dropdown-menu dropdown-menu-ligth" aria-labelledby="navbarLigthDropdownMenuLink">
                                    <li><a class="dropdown-item" href="../matriculas/buscarM.php">Crear Matriculas</a></li>
                                    <li><a class="dropdown-item" href="../matriculas/matricula.php">Ver Matriculas</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>

                    <li class="nav-item">
                        <a class="nav-link" href="../materia/materias.php">Materias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../grado/grados.php">Grados</a>
                    </li>

                </ul>
                <form class="d-flex">

                    <div class="btn-group pe-2" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-outline-ligth" id="id-sun">claro</button>
                        <button type="button" class="btn btn-outline-dark" id="id-moon">oscuro</button>

                    </div>
                    <a href="../login.php" class="btn btn-outline-warning">Cerrar Sesion</a>

                </form>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>