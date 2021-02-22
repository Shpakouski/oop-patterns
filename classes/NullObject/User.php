<?php

namespace NullObject;


class User implements IUser
{

    private $id;
    private $login;
    private $email;

    public function __construct($id, $login, $email)
    {
        $this->setId($id);
        $this->setLogin($login);
        $this->setEmail($email);
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLogin($login)
    {
        if (strlen($login) < 2) {
            throw new \Exception('Login must be at least 2 characters');
        }
        $this->login = $login;
        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception('Invalid email');
        }
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
}