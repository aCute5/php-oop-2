<?php

class Notregistered extends User
{

    public $discount;

    public function setDiscount($discount)
    {
        $this->discount = 0;
        return $this;
    }
}

$registered->setDiscount(0);