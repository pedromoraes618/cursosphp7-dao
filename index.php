<?php 

require_once("config.php");

//carrega um usuario usando o login e a senha 
$usuario = new usuario();
$usuario->login("Paulo","321");

echo $usuario;

//carrega uma lista de usuario buscando pelo login
//$search=Usuario::search("P");
//echo json_encode($search);
//carrega uma lista de usuario
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega um usuario
//$root = new Usuario();

//$root->loadbyId(10);

//echo $root;

/*$sql = new sql();


$usuario = $sql->select("SELECT * from tb_usuario");

echo json_encode($usuario);*/


 ?>