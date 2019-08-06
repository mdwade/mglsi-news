<?php

require_once './model/dao/ArticleDAO.php';
require_once './model/dao/CategoryDAO.php';
require_once './model/dao/CommentDAO.php';
require_once './model/domaine/Article.php';
class ArticleController {

	static function createArticle($request) {
		$title = $request['title'];
		$categoryId = $request['category-id'];
		$content = $request['content'];
		$slug = str_replace(" ", "_", strtolower($title));
		$slug = str_replace("-", "_", strtolower($title));

		$article = new Article();

		$article->setTitle($title);
		$article->setContent($content);
		$article->setIdCategorie($categoryId);
		$article->setPhoto('loremipsum.jpg');

		ArticleDAO::createArticle($article);
	}

	static function getlistArticle() {
		$listAritcle = ArticleDAO::readArticles();
		$categorieList = CategoryDAO::getCategorieList();

		require 'view/home.php';
	}

	static function getArticleItem() {
		if (isset($_GET['id']) && $_GET['id'] > 0) {
			$article = ArticleDAO::readArticleById($_GET['id']);
			$categorieList = CategoryDAO::getCategorieList();
			$commentList = CommentDAO::getListCommentByArticle($_GET['id']);

			require 'view/articleItemView.php';
		} else {
			echo '<h3>Erreur : cette article n\'existe pas !</h3>
                  </br>
                  <meta http-equiv="refresh" content="3; url=index.php">
                  ';
		}
	}

	static function getlistArticleByCategorie() {
		if (isset($_GET['id']) && $_GET['id'] > 0) {
			$article = ArticleDAO::readArticlesByCategorie($_GET['id']);
			$comments = CommentDAO::getListCommentByArticle($_GET['id']);
			$categorieList = CategoryDAO::getCategorieList();
			var_dump($comments);
			require 'view/articleItemView.php';
		} else {
			echo '<h3>Erreur : cette catégorie n\'existe pas</h3>
                  </br>
                  <meta http-equiv="refresh" content="3; url=index.php">
                ';
		}
	}

	static function deleteArticle($id) {
		ArticleDAO::deleteArticle($id);
	}

	static function getArticle($request){
		echo ArticleDAO::readArticleById($request['id']);
	}
}
