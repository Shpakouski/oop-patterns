<?php

namespace Bridge;


interface IDriver
{
    public function execute($query);
}