<?php

namespace Iterator;


class Post
{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, string $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }


}