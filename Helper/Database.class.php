<?php

class Helper_Database
{
	private $db;
	public function __construct()
	{
		$config = new Helper_Config("config.ini");
		$dbname = $config->get('dbname','database');
		$user = $config->get('user','database');
		$password = $config->get('password','database');
		//CONNECTEUR A MA BASE DES DONNES, DANS INDEX CREER LA VARIABLE CORRESPONDANT $db
		$this->db = new PDO('mysql:host=localhost;dbname='.$dbname,$user,$password);
		$this->db->exec("SET NAMES UTF8");
	}
	public function query($queryString,$data)
	{

		//PREPARE
		$query=$this->db->prepare($queryString);
		
		//EXECUTE
		$query->execute($data);

		//FETCH ALL
		$result=$query->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	public function queryOne($queryString,$data)
	{
		//PREPARE
		$query=$this->db->prepare($queryString);
		
		//EXECUTE
		$query->execute($data);

		//FETCH ALL
		$result=$query->fetch(PDO::FETCH_ASSOC);
		$result=$query->fetch(PDO::FETCH_ASSOC);
		return $result;
	}
}
