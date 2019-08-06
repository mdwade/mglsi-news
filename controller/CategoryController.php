<?php

require_once './model/dao/CategoryDAO.php';

class CategoryController {

	public static function createCategory($request) {
		$libelle= $request['libelle-category'];

		$category = new Category();
		
		$category->setLibelle($libelle);

		CategoryDAO::createCategory($category);
	}
}
