<?php

class Commentaire {
    private $comment_id;
    private $dino_id;
    private $user_id;
    private $comment;
    private $date;
    private $response_comment_id;

    public function __construct($comment_id, $dino_id, $user_id, $comment, $date, $response_comment_id)
    {
        $this->comment_id = $comment_id;
        $this->dino_id = $dino_id;
        $this->user_id = $user_id;
        $this->comment = $comment;
        $this->date = $date;
        $this->response_comment_id = $response_comment_id;
    }

    public function getDinoId()
    {
        return $this->dino_id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getResponseCommentId()
    {
        return $this->response_comment_id;
    }

    public function getCommentId()
    {
        return $this->comment_id;
    }

}