<?php
class Carros {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function getCarros() {
		$array = array();

		$sql = "SELECT * FROM carros order by nome";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

}