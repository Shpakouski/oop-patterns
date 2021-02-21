<?php

namespace Prototype;


class Post implements IPost
{

    private $title;
    private $text;
    private $user;
    private $comments = [];
    private $created_at;

    public function __construct(User $user, $title, $text)
    {
        $this->user = $user;
        $this->title = $title;
        $this->text = $text;
        $this->created_at = new \DateTime();

        $this->user->addPost($this);
    }

    public function addComment($comment)
    {
        $this->comments[] = $comment;
    }

    public function __clone()
    {
        $this->title = $this->title . " New Post";
        $this->user->addPost($this);
        $this->comments = [];
        $this->created_at = new \DateTime();
    }
}