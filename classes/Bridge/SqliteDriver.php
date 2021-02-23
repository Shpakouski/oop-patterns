<?php

namespace Bridge;


class SqliteDriver implements IDriver
{
    private $sqlite;

    public function __construct($filepath)
    {
        $this->sqlite = new \SQLite3('classes/Bridge/' . $filepath);
        $this->sqlite->query("CREATE TABLE IF NOT EXISTS messages(id INTEGER PRIMARY KEY,text TEXT);");
    }

    public function execute($query)
    {
        $this->sqlite->query($query);
    }
}