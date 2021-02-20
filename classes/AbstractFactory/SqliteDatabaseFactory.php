<?php

namespace AbstractFactory;


class SqliteDatabaseFactory implements DatabaseFactory
{

    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function connect(): DatabaseConnect
    {
        return new SqliteDatabaseConnect($this->fileName);
    }

    public function query(): DatabaseQuery
    {
        return new SqliteDatabaseQuery($this->connect());
    }
}