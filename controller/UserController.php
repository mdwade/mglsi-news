<?php
require_once './model/dao/UserDAO.php';

class UserController {

  public static function login($request){
    $login = $request['login'];
    $password = $request['password'];

    $res = UserDAO::findByLogin($login);

    if($res['password'] == sha1($password)){
      session_start();

      $_SESSION['id'] = $res['id'];

      echo "true";
    }else{
      echo "false";
    }
  }
}
