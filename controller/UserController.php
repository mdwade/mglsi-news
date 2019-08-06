<?php
require_once './model/dao/UserDAO.php';
require_once './model/domaine/User.php';

class UserController {

  public static function login($request){
    $login = $request['login'];
    $password = $request['password'];

    $res = UserDAO::findByLogin($login);

    if($res['password'] == sha1($password)){
      session_start();

      $_SESSION['id'] = $res['id'];
      $_SESSION['pseudo'] = $res['pseudo'];
      echo "true";
    }else{
      echo "false";
    }
  }

  public static function getAll(){
    return UserDAO::getAll();
  }

  public static function editUser($request){
    $user = new User();

    $user->setPseudo($request['edit-pseudo']);
    $user->setLogin($request['edit-login']);
    $user->setPassword(sha1($request['edit-password']));
    $user->setUserType($request['edit-user-type']);
    $user->setId($request['user-id']);

    UserDAO::update($user);
  }

  public static function createUser($request){
    $user = new User();

    $user->setPseudo($request['pseudo']);
    $user->setLogin($request['login']);
    $user->setPassword(sha1($request['password']));
    $user->setUserType($request['user-type']);

    UserDAO::createUser($user);
  }
}
