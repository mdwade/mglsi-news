<?php

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

include_once (ROOT.'controller/AppController.php');
session_start();
$appController = new AppController();

if(isset($_GET['action']))
{
  switch ($_GET['action'])
  {
    case 'listArticles':
    $appController->getlistArticle();
    break;
    case 'article':
    $appController->getArticleItem();
    break;
    case 'article/create':
    $appController->createArticle();
    break;
    case 'category':
    $appController->getlistArticleByCategorie();
    case 'login':
    break;
    case 'edit':
    echo ArticleDAO::readArticleById($_GET['id']);
    break;
    case'admin':
    break;
    default:
    $appController->getlistArticle();
    break;
  }
}
else
{
  $uri = explode('mglsi-news',$_SERVER['REQUEST_URI'],2);

  switch($uri[1]){
    case '/':
    $appController->getlistArticle();
    break;
    case '/admin':
    $appController->getAdminPage();
    break;
    case '/article/all':
    echo ArticleDAO::readArticles();
    break;
    case '/article/create':
    $appController->createArticle($_POST);
    break;
    case '/category/all':
    echo json_encode(CategoryDAO::getCategorieList());
    break;
    case '/category/create':
    $appController->createCategory($_POST);
    break;
    case '/login':
    $appController->getLoginPage();
    break;
    case '/logout':
    $appController->logout();
    break;
    case '/user/login':
    $appController->login($_POST);
    break;
    break;
  }
  // require 'view/admin.php';

}
