<?php

namespace FactoryMethod;


class FileSave implements ISave
{

    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function save(string $message)
    {
        file_put_contents($this->filePath, $message);
    }
}