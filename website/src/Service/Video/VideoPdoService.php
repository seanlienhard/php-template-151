<?php

namespace seanlienhard\Service\Video;
use seanlienhard\Service\Video\VideoService;

class VideoPdoService implements VideoService
{
	private $pdo;
	private $salt = "hoihoihoi";
	public function __construct(\Pdo $pdo)
	{
		$this->pdo = $pdo;
	}

	public function getVideosByCategoryId($categoryId){
		$stmt = $this->pdo->prepare("SELECT * FROM video WHERE categoryId=?");
		$stmt->bindValue(1, $categoryId);
		$stmt->execute();
		$data = array();
		while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
			$data[] = $row;
		}
		return $data;
	}
	public function addVideo($link, $categoryId, $userId){
		$stmt = $this->pdo->prepare("INSERT INTO video VALUES(NULL, ?, ?, ?)");
		$stmt->bindValue(1, $link);
		$stmt->bindValue(2, $categoryId);
		$stmt->bindValue(3, $userId);
		$stmt->execute();
		return $stmt->rowCount();
	}
}