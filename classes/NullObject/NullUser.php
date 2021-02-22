<?php

namespace NullObject;


class NullUser implements IUser
{

    private $id = 'ID is empty';
    private $login = 'Login is empty';
    private $email = 'Email is empty';

    public function __construct()
    {
    }

    public function setId($id)
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLogin($login)
    {
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setEmail($email)
    {
    }

    public function getEmail()
    {
        return $this->email;
    }
}