<?php


class UserDAO
{
  public static function createUser(User $user){
    $msg = false;
    $query = DB::getDB()->prepare('INSERT INTO users(login, password, pseudo, userType)
    VALUES (:login, :password, :pseudo, :userType)');
    $query->bindParam(':login', $user->getLogin());
    $query->bindParam(':password', $user->getPassword());
    $query->bindParam(':pseudo', $user->getPseudo());
    $query->bindParam(':userType', $user->getUserType());

    if($query->execute()){
      $msg = true;
    }

    return $msg;
  }

  public static function deleteUser($pseudo){
    $msg = false;
    $query = 'DELETE FROM users where $pseudo ='.$pseudo;

    if(DB::getDB()->query($query)){
      $msg = true;
    }

    return $msg;
  }

  public static function findByLogin($login){
    $req = DB::getDB()->query('SELECT * FROM users where login ="'.$login.'"');

    $response = $req->fetch(PDO::FETCH_ASSOC);

    $req->closeCursor();

    return $response;
  }
}
