<?php

require_once 'DB.php';
require_once (ROOT.'model/domaine/Comment.php');


class CommentDAO
{
    //create a comment
    static function createComment(Comment $comment){
        $msg = false;

        $query = DB::getDB()->prepare('INSERT INTO comments(content, idArticle, pseudoAuthor, postedDate)
                                                VALUES (:content, :idArticle, :pseudoAuthor, :postedDate)');
        $query->bindParam(':content', $comment->getContent());
        $query->bindParam(':idArticle', $comment->getIdArticle());
        $query->bindParam(':pseudoAuthor', $comment->getPseudoAuthor());
        $query->bindParam(':postedDate', $comment->getPostedDate());

        if($query->execute()){
            $msg = true;
        }

        return $msg;
    }

    //get list by article id
    static function getListCommentByArticle($idArticle){
        $comments = array();
        $query = DB::getDB()->query('SELECT * FROM `comments` WHERE idArticle='.$idArticle.' ORDER BY YEAR(postedDate), MONTH(postedDate), DAY(postedDate) asc ');
        while ($data = $query->fetch(PDO::FETCH_ASSOC)){
            $comments[] = $data;
        }
        return json_encode($comments);
    }

    //delete a comment
    static function deleteComment($idComment){
        $msg = false;
        $query = 'DELETE FROM comments where $id ='.$idComment;

        if(DB::getDB()->query($query)){
            $msg = true;
        }

        return $msg;
    }
}