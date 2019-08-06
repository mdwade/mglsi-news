<?php

class Server {

	function __construct() {
		# code...
	}

	public function getStudentName() {
		return "diadji";
	}
}

$params = array("uri" => 'localhost/mglsi-news/web-service/Server.php');

$server = new SoapServer(null, $params);

$server->setClass('Server');

$server->handle();
