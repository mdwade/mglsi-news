<?php

require_once ('ArticleController.php');
require_once ('CategoryController.php');
require_once ('CommentController.php');
require_once ('UserController.php');

class AppController
{
    /*Articles*/
    function createArticle($request){
        //TODO
    }

    function getlistArticle(){
        ArticleController::getlistArticle();
    }

    function getArticleItem(){
        ArticleController::getarticleItem();
    }

    function getlistArticleByCategorie(){
        ArticleController::getlistArticleByCategorie();
    }

    function deleteArticle($request){
        //TODO
    }


    /*Categories*/
    function createCatgory($request){
        //TODO
    }


    /*Users*/
    function createUser($request){
        //TODO
    }

    function deleteUser($request){
        //TODO
    }

    function login($request){
        //TODO
    }


    /*Comments*/
    function createComment($request){
        //TODO
    }

    function deleteComment($request){
        //TODO
    }


}