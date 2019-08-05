<?php

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

$url = explode('/', $_SERVER['REQUEST_URI']);

include_once (ROOT.'controller/AppController.php');

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
            $appController->login();
            break;

        default:
            $appController = new AppController();
            $appController->getlistArticle();
            break;
    }
}
elseif ($url[2] == 'login'){
    $appController = new AppController();
    $appController->login();
}
else
{
    $appController = new AppController();
    $appController->getlistArticle();
}