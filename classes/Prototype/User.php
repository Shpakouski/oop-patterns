<?php

namespace Prototype;


class User
{
    private $firstName;
    private $posts = [];

    public function __construct($firstName)
    {
        $this->firstName = $firstName;
    }

    public function addPost(Post $post)
    {
        $this->posts[] = $post;
    }
}