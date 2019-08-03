<?php

require_once 'DB.php';
require_once (ROOT.'model/domaine/Category.php');

class CategoryDAO
{
    //create a categorie
    static function createCategory(Category $categorie){
        $msg = false;

        $query = DB::getDB()->prepare('INSERT INTO categories(libelle) VALUES (:libelle)');
        $query->bindParam(':libelle', $categorie->getLibelle());

        if($query->execute()){
            $msg = true;
        }

        return $msg;
    }

    //get List categorie
    static function getCategorieList(){
        $query = DB::getDB()->query('SELECT * FROM categories ORDER BY id');

        return $query;
    }
}