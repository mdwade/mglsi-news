<?php

require_once ('./model/dao/CategoryDAO.php');

class CategoryController
{
    static function createCategory(Category $c){
        CategoryDAO::createCategory($c);
    }
}