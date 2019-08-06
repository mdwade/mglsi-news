<?php

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

$url = explode('/', $_SERVER['REQUEST_URI']);

include_once (ROOT.'controller/AppController.php');
session_start();
$appController = new AppController();

if(isset($_GET['action']))
{

  switch ($_GET['action'])
  {
    case 'listArticles':
    $appController = new AppController();
    $appController->getlistArticle();
    break;

    case 'article':
    $appController = new AppController();
    $appController->getArticleItem();
    break;

    case 'category':
    $appController = new AppController();
    $appController->getlistArticleByCategorie();
    break;

    case 'login':
    $appController = new AppController();
    $appController->login($_POST);
    break;

    default:
    $appController = new AppController();
    $appController->getlistArticle();
    break;
  }
}
// elseif ($url[2] == 'login'){
//   $appController = new AppController();
//   $appController->login();
// }
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
    case '/article/edit':
    $appController->editArticle($_POST);
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
    case '/user/all':
    $appController->listUser();
    break;
    case '/user/edit':
    $appController->editUser($_POST);
    break;
    case '/user/create':
    $appController->createUser($_POST);
    break;
    break;
  }
  // require 'view/admin.php';

}
