<?php

namespace Mediator;


class App
{
    protected $pageHelper;

    public function setPageHelper(IHelper $pageHelper)
    {
        $this->pageHelper = $pageHelper;
    }
}