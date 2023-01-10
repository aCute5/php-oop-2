<?php

class Notregistered extends User
{

    public $discount;

    public function setDiscount($discount)
    {
        $this->discount = 0;
        return $this;
    }

    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }
}