<?php
include("cn.php");
$inventario = "SELECT * FROM inventario"; 
?>
<!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="img/favicon1.ico"/> 
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
   
     <title>Tecnitia</title>   
</head>
<body>
<center>
	 <img src="img/tecnitia.png" alt=""> 
</center>
<div class="topnav" id="myTopnav">
  <a href="inicio.php" class="active">Inicio</a>
  <a href="cont.php">Contenedores</a>
  <a href="sens.php">Sensores</a>
  <a href="asoc.php">Asociacion</a>
  <a href="even.php">Evento</a>
 <!-- <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>-->
  <a href="inv.php">Instalacion</a>
  <a href="tec.php">Tecnitia</a>
  <a class="active_logout" href="index.php">Cerrar sesion</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<h2>Inventario Tecnitia</h2>
<p></p>

<div style="overflow-x:auto;">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Busqueda por numero de contenedor..">

<table id="myTable">
  <tr class="header">
   <!-- <th style="width:60%;">Name</th>
    <th style="width:40%;">Country</th> -->
      <th>ID Contenedor</th>
      <th>#</th>
      <th>Zona</th>
      <th>Isla</th>
      <th>Direccion</th>
      <th>Estado</th>
      <th>Fecha de estado</th>
      <th>Longitud</th>
      <th>Latitud</th>
      <th>Comentario</th>
    </tr>
    <?php
    $resultado = mysqli_query($conexion, $inventario);
    while($row = mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
      <td><?php echo $row ["idcontenedor"]?></td>
      <td><?php echo $row ["nregistro"]?></td>
      <td><?php echo $row ["zona"]?></td>
      <td><?php echo $row ["isla"]?></td>
      <td><?php echo $row ["direccion"]?></td>
      <td><?php echo $row ["estado"]?></td>
      <td><?php echo $row ["fecha"]?></td>
      <td><?php echo $row ["latitud"]?></td>
      <td><?php echo $row ["longitud"]?></td>
      <td><?php echo $row ["comentario"]?></td>
      <?php } ?>
    </tr>
</table>
</div> 
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