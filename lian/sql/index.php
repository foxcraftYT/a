<?php
    include "conexion.php";
    if(isset($_REQUEST["btn"])){
        $nombre=$_REQUEST["nombre"];
        $contraseña = $_REQUEST["contraseña"];
        $correo=$_REQUEST["correo"];
        $consulta = "INSERT INTO `usuarios`(`nombre`, `correo`, `contraseña`) VALUES ('$nombre','$correo','$contraseña')";
        $query = $conexion->query($consulta);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>didi pagina</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body .my-custom-background {
          background-color: #f2b8c4; 
        }
      </style>
</head>
    <body class="d-flex justify-content-center">
        <div class="content-fluid d-flex flex-column ">
            <form action="index.php" method="post" class="d-flex flex-column gap-2 ">
                <section>
                    <section class="w-100">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </section>
                <section class="w-100">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" id="correo" class="form-control">
                </section>
                    <section class="w-100">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="contraseña" id="contraseña" class="form-control">
                    </section>
                </section>
                <section>
                    <a href="../login/index.php">ya tengo cuenta</a>
                </section>
                <section >
                    <input type="submit" class="btn btn-success" value="enviar" name="btn">
                </section>
            </form>
        </div>
    </body>
</html>