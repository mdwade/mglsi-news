<?php

class DB {
	public static function getDB() {
		$_db = new PDO('mysql:host=localhost; dbname=m1glsi_news; charset=utf8', 'root', 'passer');
		$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

		return $_db;
	}

}
