<?php

namespace seanlienhard;

class Factory 
{
	private $config;
	
	public static function crateFromInitFile($source){
		return new Factory(parse_ini_file($source));
	}
	
	public function __construct(array $config){
		$this->config = $config;
	}
	
	function getIndexController()
	{
		return new Controller\IndexController($this->getTemplateEngine());
	}
	
	function getPdo()
	{
		return new \PDO(
			"mysql:host=mariadb;dbname=youtube;charset=utf8",
			$this->config['user'],
			"my-secret-pw",
			[\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
		);
	}	
	
	function getUserService()
	{
		return new Service\User\UserPdoService($this->getPdo());
	}
	
	function getCategoryService()
	{
		return new Service\Category\CategoryPdoService($this->getPdo());
	}
	
	function getVideoService()
	{
		return new Service\Video\VideoPdoService($this->getPdo());
	}
	
	public function getMailer()
	{
		return \Swift_Mailer::newInstance(
				\Swift_SmtpTransport::newInstance("smtp.gmail.com", 465, "ssl")
				->setUsername("gibz.module.151@gmail.com")
				->setPassword("Pe$6A+aprunu")
				);
	}
}