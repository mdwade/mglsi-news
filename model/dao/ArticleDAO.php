<?php

require_once ('DB.php');
require_once (ROOT.'model/domaine/Article.php');

class ArticleDAO
{
  //create an article
  static function createArticle(Article $a){
    $msg = false;
    $query = DB::getDB()->prepare('INSERT INTO articles (title, content, idCategorie, photo, pseudoAuthor)
    VALUES (:title, :content, :idCategorie, :photo, :pseudoAuthor)');

    $query->bindValue(':title', $a->getTitle());
    $query->bindValue(':content', $a->getContent());
    $query->bindValue(':idCategorie', $a->getIdCategorie());
    $query->bindValue(':photo', $a->getPhoto());
    $query->bindValue(':pseudoAuthor', 'djadja');

    if($query->execute()){
      $msg = true;
    }

    return $msg;
  }

  //get all articles
  public static function readArticles(){
    $articles = array();

    $query = DB::getDB()->query('SELECT * FROM articles');

    $articles = $query->fetchAll(PDO::FETCH_ASSOC);

    return json_encode($articles);
  }
  
  static function readArticleById($id){
    $article = DB::getDB()->query('SELECT * FROM articles where id ='.$id);

    $item = $article->fetch(PDO::FETCH_ASSOC);

    $article->closeCursor();

    return json_encode($item);
  }

  //get article by categorie
  static function readArticlesByCategorie($idCategory){
    $items = array();

    $query = DB::getDB()->query('SELECT * FROM articles where idCategorie ='.$idCategory);

    $items[] = $query->fetchAll(PDO::FETCH_ASSOC);

    return $items;
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
