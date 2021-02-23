<?php

namespace Adapter;


class WebMoney implements IPayment
{
    private $params;

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function getForm($total)
    {
        echo 'Payment form ' . $total;
    }
}