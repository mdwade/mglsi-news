<?php

require_once ('./model/dao/ArticleDAO.php');
require_once ('./model/dao/CategoryDAO.php');
require_once ('./model/dao/CommentDAO.php');

class ArticleController
{

    static function createArticle(Article $a){
        ArticleDAO::createArticle($a);
    }

    static function getlistArticle(){
        $listAritcle = ArticleDAO::readArticles();
        $categorieList = CategoryDAO::getCategorieList();

        require 'view/home.php';
    }

    static function getarticleItem(){
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $article = ArticleDAO::readArticleById($_GET['id']);
            $categorieList = CategoryDAO::getCategorieList();
            $commentList = CommentDAO::getListCommentByArticle($_GET['id']);

            require 'view/articleItemView.php';
        }
        else {
            echo '<h3>Erreur : cette article n\'existe pas !</h3> 
                  </br>
                  <meta http-equiv="refresh" content="3; url=index.php">
                  ';
        }
    }

    static function getlistArticleByCategorie(){
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $article = ArticleDAO::readArticlesByCategorie($_GET['id']);
            $comments = CommentDAO::getListCommentByArticle($_GET['id']);
            $categorieList = CategoryDAO::getCategorieList();
var_dump($comments);
            require 'view/articleItemView.php';
        }
        else {
            echo '<h3>Erreur : cette catégorie n\'existe pas</h3> 
                  </br>
                  <meta http-equiv="refresh" content="3; url=index.php">
                ';
        }
    }

    static function deleteArticle($id){
        ArticleDAO::deleteArticle($id);
    }

}