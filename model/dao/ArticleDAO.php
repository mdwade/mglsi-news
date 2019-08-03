<?php

require_once ('DB.php');
require_once (ROOT.'model/domaine/Article.php');

class ArticleDAO
{
    //create an article
    static function createArticle(Article $a){
        $msg = false;
        $query = DB::getDB()->prepare('INSERT INTO articles (title, content, idCategorie, photo, pseudoAuthor, postedDate) 
                                                VALUES (:title, :content, :idCategorie, :photo, :pseudoAuthor, :postedDate)');

        $query->bindParam(':title', $a->getTitle());
        $query->bindParam(':content', $a->getContent());
        $query->bindParam(':idCategorie', $a->getIdCategorie());
        $query->bindParam(':photo', $a->getPhoto());
        $query->bindParam('pseudoAuthor', $a->getPseudoAuthor());
        $query->bindParam(':postedDate', $a->getPostedDate());


        if($query->execute()){
            $msg = true;
        }

        return $msg;
    }

    //get all articles
    static function readArticles(){
        $articles = array();
        $query = DB::getDB()->query('SELECT * FROM articles');

        while ($data = $query->fetch(PDO::FETCH_ASSOC)){
            $articles[] = $data;
        }
        return json_encode($articles);
    }

    //get article by id
     static function readArticleById($id){
        $article = DB::getDB()->query('SELECT * FROM articles where id ='.$id);
        $item = $article->fetch();
        $article->closeCursor();
        return json_encode($item);
    }

    //get article by categorie
    static function readArticlesByCategorie($idCategory){
        $items = array();
        $query = DB::getDB()->query('SELECT * FROM articles where idCategorie ='.$idCategory);
        while ($data = $query->fetch(PDO::FETCH_ASSOC)){
            $items[] = $data;
        }
        return json_encode($items);
    }

    //delete an article
    static function deleteArticle($id){
        $msg = false;
        $query = 'DELETE FROM article where $id ='.$id;

        if(DB::getDB()->query($query)){
            $msg = true;
        }

        return $msg;
    }
}