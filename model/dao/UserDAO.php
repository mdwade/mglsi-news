<?php


class UserDAO
{
  public static function createUser(User $user){
    $query = DB::getDB()->prepare('INSERT INTO users(login, password, pseudo, userType)
    VALUES (:login, :password, :pseudo, :userType)');

    $query->bindValue(':login', $user->getLogin());
    $query->bindValue(':password', $user->getPassword());
    $query->bindValue(':pseudo', $user->getPseudo());
    $query->bindValue(':userType', $user->getUserType());

    return $query->execute();
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

  public static function getAll(){
    $req = DB::getDB()->query('SELECT * FROM users');

    $response = $req->fetchAll(PDO::FETCH_ASSOC);

    $req->closeCursor();

    return $response;
  }

  public static function update(User $user){
    $query = DB::getDB()->prepare('UPDATE users SET login=:login, pseudo =:pseudo, password =:password, userType=:userType  WHERE users.id = :id');

    $query->bindValue(':login', $user->getLogin());
    $query->bindValue(':pseudo', $user->getPseudo());
    $query->bindValue(':password', $user->getPassword());
    $query->bindValue(':userType', $user->getUserType());
    $query->bindValue(':id', $user->getId());

    return $query->execute();
  }
}
