<?php 

class Usuario{

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;


	public function getIdusuario(){

		return $this->$idusuario;
	}

	public function setIdusuario($value){

		return $this->$value;
	}	

	public function getDeslogin(){

		return $this->$deslogin;
	}

	public function setDeslogin($value){

		return $this->$value;
	}	

	public function getDessenha(){	

		return $this->$desenha;

	}

	public function setDessenha($value){

		return $this->$desenha;
	
	}
		public function getDtcadastro(){	

		return $this->$dtcadastro;

	}

	public function setDtcadastro($value){

		return $this->$dtcadastro;
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

	public function __toString(){

		return json_encode(array(

			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

		));

	}

}


 ?>