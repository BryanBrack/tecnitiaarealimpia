<?php
include("cn.php");
$id = $_GET["id"];
$contenedores = "SELECT * FROM contenedores WHERE nresgistro = '$id'"; 
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="img/favicon1.ico"/> 
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, 
minimum-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="style.css">
	<script src="menu.js"></script>

<head>
   
     <title>Editar</title>   
</head>
<body>
<center>
	 <img src="img/tecnitia.png" alt=""> 
</center>
<h2>Editar Registro</h2>
<p></p>
<div style="overflow-x:auto;">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Busqueda por numero de contenedor..">
<table id="myTable">
  <tr class="header">
  <form class="container_table" action="procesar_act.php" method="post">
		<th>ID Contenedor</th>
		<th>Direccion</th>
		<th>MAC</th>
		<th>Serial</th>
		<th>Estado</th>
		<th>Estatus</th>
		<th>Longitud</th>
		<th>Latitud</th>
    <th>#</th>
    <th>Operacion</th>
    </tr>
		<?php
		 $resultado = mysqli_query($conexion, $contenedores);
		 while($row = mysqli_fetch_assoc($resultado)){
		?>
    <tr>
		<td><input type="text" value="<?php echo $row ["idcontenedor"]?>" name="idcontenedor"></td>
		<td><input type="text" value="<?php echo $row ["direccion"]?>" name="direccion"></td>
		<td><input type="text" value="<?php echo $row ["mac"]?>" name="mac"></td>
		<td><input type="text" value="<?php echo $row ["serial"]?>" name="serial"></td>
		<td><input type="text" value="<?php echo $row ["estado"]?>" name="estado"></td>
		<td><input type="text" value="<?php echo $row ["estatus"]?>" name="estatus"></td>
		<td><input type="text" value="<?php echo $row ["longitud"]?>" name="longitud"></td>
		<td><input type="text" value="<?php echo $row ["latitud"]?>" name="latitud"></td>
    <td><input type="hidden" value="<?php echo $row ["nresgistro"]?>" name="nresgistro"></td>
		<?php } mysqli_free_result($resultado);?>
		<td><input type="submit" value="Actualizar" class="submit_act"></td>
    </tr>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>
</html>