<?php

namespace seanlienhard\Controller;
use LucStr\Controller\BaseController;

use LucStr\MessageHandler;

class IndexController extends BaseController
{
  public function Index($categoryId = 0)
  {
  	if(!isset($_SESSION["userId"])){
  		MessageHandler::info("Bitte logge dich zuerst ein!");
  		return $this->redirectToAction("Login", "Index");
  	}
  	$categoryService = $this->factory->getCategoryService();
  	$categories = $categoryService->getCategoriesByUserId($_SESSION["userId"]);
  	$videoService = $this->factory->getVideoService();
  	$videos = array();
  	if($categoryId != 0){
  		$videoService = $this->factory->getVideoService();
  		$videos = $videoService->getVideosByCategoryId($categoryId);
  	}
  	return $this->view([
  			"categoryId" => $categoryId,
  			"categories" => $categories,
  			"videos" => $videos
  	]);
  }

  public function AddCategory($name){
  	if(!isset($_SESSION["userId"])){
  		MessageHandler::info("Bitte logge dich zuerst ein!");
  		return $this->redirectToAction("Login", "Index");
  	}
    if ($name != "") {
      $categoryService = $this->factory->getCategoryService();
      $categoryService->addCategory($name, $_SESSION["userId"]);
    }
    $this->redirectToAction("Index", "Index");
  }
  public function AddVideo($categoryId, $link){
  	if(!isset($_SESSION["userId"])){
  		MessageHandler::info("Bitte logge dich zuerst ein!");
  		return $this->redirectToAction("Login", "Index");
  	}
  	if(!isset($categoryId) || $categoryId == 0){
  		MessageHandler::info("KategoryId ist ungültig");
  		return $this->redirectToAction("Index", "Index");
  	}
  	if(strpos($link, 'youtube.com') === false){
  		MessageHandler::info("Link muss von Youtube kommen");
  		return $this->redirectToAction("Index", "Index");
  	}
  	$newlink = str_replace("watch?v=", "embed/", $link);
  	$videoService = $this->factory->getVideoService();
  	$videoService->addVideo($newlink, $categoryId, $_SESSION["userId"]);
  	$this->redirectToAction("Index", "Index");
  }
}
