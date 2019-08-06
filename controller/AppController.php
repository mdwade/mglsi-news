<?php

require_once 'ArticleController.php';
require_once 'CategoryController.php';
require_once 'CommentController.php';
require_once 'UserController.php';

class AppController {
	/*Articles*/
	function createArticle($request) {
		ArticleController::createArticle($request);
	}

	function detailArticle($request){
		ArticleController::getArticle($request);
	}

	function getlistArticle() {
		ArticleController::getlistArticle();
	}

	function getArticleItem() {
		ArticleController::getArticleItem();
	}

	function getlistArticleByCategorie() {
		ArticleController::getlistArticleByCategorie();
	}

	function deleteArticle($request) {
		//TODO
	}

	/*Categories*/
	function createCategory($request) {
		CategoryController::createCategory($request);
	}

	/*Users*/
	function createUser($request) {
		//TODO
	}

	function deleteUser($request) {
		//TODO
	}

	function login($request) {
		UserController::login($request);
	}

	/*Comments*/
	function createComment($request) {
		//TODO
	}

	function deleteComment($request) {
		//TODO
	}

	function getAdminPage(){
		if(!isset($_SESSION['id'])){
			 header('Location:http://localhost/mglsi-news/login');
		}else{
			require 'view/admin.php';
		}
	}

	function getLoginPage(){
		if(isset($_SESSION['id'])){
			header('Location:http://localhost/mglsi-news/admin');
		}else{
			include 'view/loginView.php';
		}
	}

	function logout(){
		session_destroy();

		header('Location:http://localhost/mglsi-news');
	}
}
