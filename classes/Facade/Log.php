<?php

namespace Facade;


class Log
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function addLog($message)
    {
        file_put_contents('classes/Facade/Logs/' . $this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}