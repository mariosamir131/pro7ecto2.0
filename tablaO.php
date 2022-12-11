<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Online</title>
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
<h2 class="titleF">Informacion en base de datos en linea</h2>
<?php 
$username = "sql10582607"; 
$password = "T5gcSRCTvm"; 
$database = "sql10582607"; 
$mysqli = new mysqli("sql10.freesqldatabase.com", $username, $password, $database); 
$query = "SELECT a.codV, a.nombreE, a.fechaL, z.tipoZ, z.descripcion FROM 
agencia a, zona z WHERE a.codV = z.codV;";


echo '<div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-striped table-bordered table-hover table-dark">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Nombre de la empresa</th>
							<th>Fecha Limite de plaza</th>
              <th>Tipo de trabajo</th>
              <th>Descripcion</th>
						</tr>
					</thead>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["codV"];
        $field2name = $row["nombreE"];
        $field3name = $row["fechaL"];
        $field4name = $row["tipoZ"];
        $field5name = $row["descripcion"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
        
    }
    $result->free();
} 
?>
</div>
</body>
</html>