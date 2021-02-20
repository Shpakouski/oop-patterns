<?php

namespace AbstractFactory;


class SqliteDatabaseQuery implements DatabaseQuery
{

    private $connector;

    public function __construct(DatabaseConnect $connector)
    {
        $this->connector = $connector;
    }

    public function execute(string $query)
    {
        $this->connector->connection()->query("CREATE TABLE IF NOT EXISTS messages(id INTEGER PRIMARY KEY,text TEXT);");
        $this->connector->connection()->query($query);
    }
}