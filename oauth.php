<?php //session_start();
require ("a/includes/system/conexion.class.php");
include ("a/includes/system/seguridad.class.php");
$usuario = limpiador($_POST['usuario']);
$password= limpiador($_POST['password']);
$region  = limpiador($_POST['region']);
if ($usuario!='' and $password!='' and $region!='' ){   
$_db   = new db('localhost','root','','personal'); 
$query = 'SELECT * FROM usuarios WHERE usuario= ? LIMIT 1'; 
$stmt  = $_db->prepare($query); 
##################Especificación del tipo de caracteres##################
# Carácter  Descripción
#   i       la variable correspondiente es de tipo entero
#   d       la variable correspondiente es de tipo double
#   s       la variable correspondiente es de tipo string
#   b       la variable correspondiente es un blob y se envía en paquetes
#########################################################################
$stmt->mbind_param('s',$usuario); 
$stmt->execute(); 
$stmt->store_result(); 
$stmt->bind_result($id, $usuario,$activo);
$stmt->fetch(); 
$stmt->close();
echo $id . "<br/>";
echo $usuario . "<br/>";
echo $activo . "<br/>";
}else { header("Location: ./");}
?>