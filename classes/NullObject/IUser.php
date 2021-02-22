<?php

namespace NullObject;


interface IUser
{
    public function setId($id);

    public function getId();

    public function setLogin($login);

    public function getLogin();

    public function setEmail($email);

    public function getEmail();

}