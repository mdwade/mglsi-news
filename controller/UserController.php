<?php


class UserController
{
    static function admin(){
        $categorieList = CategoryDAO::getCategorieList();

        require 'view/adminHome.php';
    }
    static function login($request){

    }
}