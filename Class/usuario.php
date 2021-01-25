<?php 

class Usuario{

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;


	public function getIdusuario(){

		return $this->idusuario;
	}

	public function setIdusuario($value){

		 $this->idusuario = $value;
	}	

	public function getDeslogin(){

		return $this->deslogin;
	}

	public function setDeslogin($value){

		 $this->deslogin = $value;
	}	

	public function getDessenha(){	

		return $this->desenha;

	}

	public function setDessenha($value){

		$this->desenha = $value;
	
	}
	public function getDtcadastro(){	

		return $this->dtcadastro;

	}

	public function setDtcadastro($value){

		$this->dtcadastro = $value;
	}

	public function loadById($id){

		$sql = new sql();
		$results = $sql->select("SELECT * FROM tb_usuario where idusuario = :ID", array(":ID"=>$id));

		if(isset($results[0])){
			$row = $results[0];
			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro = (new DateTime($row['dtcadastro']));

		}



	}
//lista todos que estão na tabela 
	public static function getList(){

		$sql = new sql();

		return $sql->select("SELECT * FROM tb_usuario deslogin;");


	}

	public static function search($login){

	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_usuario where deslogin LIKE :SEARCH ORDER BY deslogin",array(':SEARCH'=>"%".$login."%"));
}

	public function login ($login,$password){

		$sql = new sql();
		$results = $sql->select("SELECT * FROM tb_usuario WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", 
		array(":LOGIN"=> $login,
			   ":PASSWORD" => $password
		));

		if(isset($results[0])){
			$row = $results[0];
			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro = (new DateTime($row['dtcadastro']));

		
			} else {

			throw new Exception("Login e/ou senha inválidos."); 

		}


	}

	public function __toString(){

		return json_encode(array(

			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()

		));

	}

}


 ?>