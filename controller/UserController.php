<?php


class UserController
{
    static function admin(){
        $categorieList = CategoryDAO::getCategorieList();

        require 'view/loginView.php';
    }
    static function login($request){

    }
}