<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css";>
</head>
<body>
<nav class="nav navbar navbar-expand-lg bg-dark">
  <a class="nav-link active" aria-current="page" href="index.php">Menu</a>
  <a class="nav-link" href="principal.php">Principal</a>
  <a class="nav-link" href="formulario.php">Formulario</a>
  <a class="nav-link" href="tabla.php">Tabla</a>
</nav>

<div class="container mt-5">
    <div class="container mt-5  ">
    <h2 class="titleF">Eliga una opcion para que base de datos quiere agregar en el formulario</h2>
    <br>
    <div class="container mt-5">
    <a href="formO.php"><img src="imagenes/mysqlonline" width="400px" heigth="400px"></a>
    <p class="contenido">
        Base de Datos en Linea
    </p>
    </div>
    <div class="container mt-5">
    <a href="formL.php"><img src="imagenes/bd" width="400px" heigth="400px"></a>
    <p class="contenido">
        Base de Datos Local
    </p>
    </div>
    </div>

    <div class="container mt-5">
        <hr>
        <center><p class="font-footer">&copy; Derechos Reservados Grupo 3</p></center>
    </div>
</div>
</body>
</html>