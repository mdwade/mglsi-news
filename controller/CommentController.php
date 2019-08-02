<?php


class CommentController
{
    static function createComment(Comment $c){
        CommentDAO::createComment($c);


    }

    static function deleteComment($id){
        CommentDAO::deleteComment($id);


    }

}