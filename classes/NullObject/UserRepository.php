<?php

namespace NullObject;


class UserRepository
{
    private $db;

    public function __construct(IDatabaseAdapter $db)
    {
        $this->db = $db;
    }

    public function fetchById($id)
    {
        $sql = "SELECT * FROM users WHERE id = $id";
        $row = $this->db->query($sql);
        if (!$row) {
            return new NullUser();
        }
        return $this->createUser($row);
    }

    private function createUser($row)
    {
        return new User($row['id'], $row['login'], $row['email'],);
    }
}