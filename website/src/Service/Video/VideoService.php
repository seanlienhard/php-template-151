<?php
namespace seanlienhard\Service\Video;

interface VideoService
{
	public function getVideosByCategoryId($categoryId);
	public function addVideo($link, $categoryId, $userId);
}