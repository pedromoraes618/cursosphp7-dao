<?php 

require_once("config.php");

$root = new Usuario();

$root->loadbyId(10);

echo $root;

/*$sql = new sql();


$usuario = $sql->select("SELECT * from tb_usuario");

echo json_encode($usuario);*/


 ?>