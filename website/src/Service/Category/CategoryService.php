<?php
namespace seanlienhard\Service\Category;

interface CategoryService
{
	public function getCategoriesByUserId($userId);
	public function addCategory($name, $userId);
}