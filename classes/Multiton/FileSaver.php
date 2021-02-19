<?php

namespace Multiton;


class FileSaver
{
    private $filePath;

    private static $_instance = [];

    private function __construct($str)
    {
        $this->filePath = $str . '-' . md5(microtime()) . '.txt';
    }

    public static function getInstance($str): FileSaver
    {
        if (!isset(self::$_instance[$str])) {
            self::$_instance[$str] = new static($str);
        }
        return self::$_instance[$str];
    }

    public function removeInstance($instanceName)
    {
        if (array_key_exists($instanceName, static::$_instance)) {
            unset(static::$_instance[$instanceName]);
        }
    }

    public function save($dir)
    {
        $content = " text ";
        if (file_exists($dir . '/' . $this->filePath)) {
            $content = file_get_contents($dir . '/' . $this->filePath) . $content;
        }
        file_put_contents($dir . '/' . $this->filePath, $content);
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}