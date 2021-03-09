<?php
include("cn.php");

$nresgistro = $_POST ['nresgistro']; 
$idcontenedor = $_POST ['idcontenedor'];
$direccion = $_POST ['direccion'];
$mac = $_POST ['mac'];
$serial = $_POST ['serial'];
$estado = $_POST ['estado'];
$estatus = $_POST ['estatus'];
$longitud = $_POST ['longitud'];
$latitud = $_POST ['latitud']; 

// Actualizar los datos 
$actualizar = "UPDATE contenedores SET idcontenedor ='$idcontenedor', direccion ='$direccion', mac = '$mac', 
serial = '$serial', estado = '$estado', estatus = '$estatus', longitud = '$longitud', latitud = '$latitud' WHERE nresgistro='$nresgistro'";

$resultado =  mysqli_query($conexion, $actualizar);

if($resultado){
    echo '<script type="text/javascript">
    alert("Registro actualizado");
    window.location.href="inv.php";
    </script>'; 

}else{
    echo "<script>alert('No se pudo actualizar los datos'); window.history.go(-1);</script)";

}
