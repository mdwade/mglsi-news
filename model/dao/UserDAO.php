<?php


class UserDAO
{
    function createUser(User $user){
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

    function deleteUser($pseudo){
        $msg = false;
        $query = 'DELETE FROM users where $pseudo ='.$pseudo;

        if(DB::getDB()->query($query)){
            $msg = true;
        }

        return $msg;
    }
}