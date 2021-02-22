<?php

namespace TemplateMethod;


class HomePage extends Page
{

    protected function setContent()
    {
        $this->content = $this->render('content', []);
    }
}