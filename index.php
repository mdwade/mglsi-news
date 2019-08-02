<?php

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

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
            break;

        default:
            $appController = new AppController();
            $appController->getlistArticle();
            break;
    }
}
else
{
    $appController = new AppController();
    $appController->getlistArticle();
}