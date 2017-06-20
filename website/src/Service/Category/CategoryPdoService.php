<?php

namespace seanlienhard\Service\Category;
use seanlienhard\Service\Category\CategoryService;

class CategoryPdoService implements CategoryService
{
	private $pdo;
	private $salt = "hoihoihoi";
	public function __construct(\Pdo $pdo)
	{
		$this->pdo = $pdo;
	}

	public function getCategoriesByUserId($userId){
		$stmt = $this->pdo->prepare("SELECT * FROM `category` WHERE userId=?");
		$stmt->bindValue(1, $userId);
		$stmt->execute();
		$data = array();
		while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
			$data[] = $row;
		}
		return $data;
	}
	public function addCategory($name, $userId){
		$stmt = $this->pdo->prepare("INSERT INTO `category` VALUES(NULL, ?, ?)");
		$stmt->bindValue(1, $name);
		$stmt->bindValue(2, $userId);
		$stmt->execute();
		return $stmt->rowCount();
	}
}