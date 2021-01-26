<?php 

require_once("config.php");

// $usuario = new Usuario();
// $usuario->loadById(10);
// $usuario->delete();
// echo $usuario;


//alter um usuario
$usuario = new Usuario();
$usuario ->loadbyId(3);

$usuario->update("Paulomoraes", "321654987");

echo $usuario;





//criando um novo usuario

// 

// $aluno = new Usuario();

// $aluno->setDeslogin("aluno");

// $aluno->setDessenha("@alunor");

// $aluno->insert();

// echo $aluno;


//carrega um usuario usando o login e a senha 
//$usuario = new usuario();
//$usuario->login("Paulo","321");

//echo $usuario;

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