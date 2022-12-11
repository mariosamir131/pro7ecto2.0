<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOrmulario</title>
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
    <h2 class="titleF">Ingrese sus datos para la BD online</h2>
    <br>
    <div class="container">
			<form method="post" action="formO.php" class="m-auto" style="max-width:600px">
				<h3 class="my-4">Ingresar Dato</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="codigo2" class="col-md-5 col-form-label">Codigo</label>
					<div class="col-md-7"><input type="text" name="codV" class="form-control form-control-lg" id="codigo2" name="codigo" required></div>
				</div>
				<div class="form-group mb-3 row"><label for="nombre-de-la-empresa3" class="col-md-5 col-form-label">Nombre de la empresa</label>
					<div class="col-md-7"><input type="text" name="nombreE" class="form-control form-control-lg" id="nombre-de-la-empresa3" name="nombre-de-la-empresa" required></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="fecha-limite-de-plaza5" class="col-md-5 col-form-label">Fecha Limite de plaza</label>
					<div class="col-md-7"><input type="text" name ="fechaL" class="form-control form-control-lg" id="fecha-limite-de-plaza5" name="fecha-limite-de-plaza" required></div>
				</div>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="enviar7" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Enviar!</button></div>
				</div>
			</form>
		</div>
    </div>
    <?php
        $username = "sql10582607"; 
        $password = "T5gcSRCTvm"; 
        $database = "sql10582607"; 
        $servidor = "sql10.freesqldatabase.com"; 

            $Conexion = mysqli_connect($servidor, $username, $password, $database);

            if ($Conexion) {
                $codV = $_POST["codV"];
                $nombreE = $_POST["nombreE"];
                $fechaL = $_POST["fechaL"];

                $Insertar = "INSERT INTO agencia VALUES ('$codV', '$nombreE', '$fechaL')";
                $Result = mysqli_query($Conexion, $Insertar);

                $Conexion->close();
            } else {
                echo "<h3>No fue posible establecer Conexión con el Servidor y Base de Datos!!!</h3>";
            }
            ?>
    <div class="container mt-5">
        <hr>
        <center><p class="font-footer">&copy; Derechos Reservados Grupo 3</p></center>
    </div>
</div>
</body>
</html>