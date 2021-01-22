<?php 

require_once("config.php");

$sql = new sql();


$usuario = $sql->select("SELECT * from tb_usuario");

echo json_encode($usuario);


 ?>