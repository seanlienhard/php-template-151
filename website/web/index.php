<?php

error_reporting(E_ALL);

require_once("../vendor/autoload.php");
$tmpl = new slienhard\SimpleTemplateEngine(__DIR__ . "/../templates/");

switch($_SERVER["REQUEST_URI"]) {
	case "/":
		(new ihrname\Controller\IndexController($tmpl))->homepage();
		break;
	case "/testroute":
		echo "test";
		break;
	case "/login":
		(new slienhard\Controller\LoginController($tmpl))-> showLogin();
		break;
	default:
		$matches = [];
		if(preg_match("|^/hello/(.+)$|", $_SERVER["REQUEST_URI"], $matches)) {
			(new slienhard\Controller\IndexController($tmpl))->greet($matches[1]);
			break;
		}
		echo "Not Found";
}

