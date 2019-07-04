<?php

class Reservas{
	private $pdo;
	private $carro;
	private $data_fim;
	private $data_inicio;
	private $pessoa;

	public function __construct($pdo){
		$this->pdo=$pdo;
	}
	
	public function getReservas(){
		$array = array();

		$sql="SELECT r.*,c.nome as carro FROM RESERVAS r,CARROS c where r.idcarro=c.id";

		$sql=$this->pdo->query($sql);
		
		if ($sql->rowCount()>0) {
			$array=$sql->fetchAll();
		}
		return $array;		
	}

	public function verificarDisponibilidade($carro, $data_inicio, $data_fim) {

		$sql = "SELECT
		*
		FROM reservas
		WHERE
		idcarro = :carro AND
		( NOT ( data_inicio > :data_fim OR data_fim < :data_inicio ) )";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":carro", $carro);
		$sql->bindValue(":data_inicio", $data_inicio);
		$sql->bindValue(":data_fim", $data_fim);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return false;
		} else {
			return true;
		}

	}

	
	public function reservar($carro, $data_inicio, $data_fim, $pessoa) {
		$sql = "INSERT INTO reservas (idcarro, data_inicio, data_fim, pessoa) VALUES (:carro, :data_inicio, :data_fim, :pessoa)";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":carro", $carro);
		$sql->bindValue(":data_inicio", $data_inicio);
		$sql->bindValue(":data_fim", $data_fim);
		$sql->bindValue(":pessoa", $pessoa);
		$sql->execute();
	}

	public function update($reserva,$carro, $data_inicio, $data_fim, $pessoa) {
		$sql = "UPDATE reservas SET data_inicio:data_inicio, data_fim:data_fim, pessoa:pessoa,idcarro:carro WHERE idreserva=:reserva";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":reserva", $reserva);
		$sql->bindValue(":carro", $carro);
		$sql->bindValue(":data_inicio", $data_inicio);
		$sql->bindValue(":data_fim", $data_fim);
		$sql->bindValue(":pessoa", $pessoa);
		$sql->execute();
	}
	public function excluir($reserva) {
		$sql = "DELETE FROM reservas WHERE idreserva=:reserva";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":reserva", $reserva);
		$sql->execute();
	}

}
?>