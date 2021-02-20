<?php

namespace FactoryMethod;


class FileSaveFactory implements ISaveFactory
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function createSaver(): ISave
    {
        return new FileSave($this->filePath);
    }
}