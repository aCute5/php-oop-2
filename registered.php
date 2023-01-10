<?php
class Registered extends User
{
    public $discount;

    public function setDiscount($discount)
    {
        $this->discount = 20;
        return $this;
    }
}

$registered->setDiscount(20);

?>