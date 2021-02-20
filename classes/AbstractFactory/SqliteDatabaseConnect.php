<?php

namespace AbstractFactory;


class SqliteDatabaseConnect implements DatabaseConnect
{

    private $sqlite;

    public function __construct($fileName)
    {
        $this->sqlite = new \SQLite3($fileName);
    }

    public function connection()
    {
        return $this->sqlite;
    }
}