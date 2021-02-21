<?php

namespace Iterator;


use Exception;
use Traversable;

class BlogTwo implements \IteratorAggregate
{

    private $posts = array();
    private $position = 0;


    public function addPost(Post $post)
    {
        array_push($this->posts, $post);
    }

    public function getPosts(): array
    {
        return $this->posts;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->posts);
    }
}