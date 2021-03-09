<?php
include("cn.php");
$sensores = "SELECT * FROM sensores"; 
?>
<!DOCTYPE html>
<html>
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
   
     <title>Tecnitia - Sensores</title>   
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
  <a href="inv.php">Instalacion</a>
  <a href="tec.php">Tecnitia</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<h2>Sensores</h2>
<p></p>


<div style="overflow-x:auto;">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Busqueda por numero de MAC..">

<table id="myTable">
  <tr class="header">
   <!-- <th style="width:60%;">Name</th>
    <th style="width:40%;">Country</th> -->
      <th>MAC</th>
      <th>#</th>
      <th>Serial</th>
      <th>Fecha de inventario</th>
      <th>Estado del sensor</th>
      <th>Sub estado del sensor</th>
      <th>Fecha de estado</th>
      <th>Editar</th>
    </tr>
    <?php
    $resultado = mysqli_query($conexion, $sensores);
    while($row = mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
      <td><?php echo $row ["mac"]?></td>
      <td><?php echo $row ["nregistro"]?></td>
      <td><?php echo $row ["serial"]?></td>
      <td><?php echo $row ["fechainv"]?></td>
      <td><?php echo $row ["estadosen"]?></td>
      <td><?php echo $row ["subestadosen"]?></td>
      <td><?php echo $row ["fecha"]?></td>
      <td><a href="#"><i class="fas fa-edit"></i></a></td>   
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