<?php
class Registered extends User
{
    public $discount;

    public function setDiscount($discount)
    {
        $this->discount = 20;
        return $this;
    }

    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        $this->discount = 20;
        return $this->discount;
    }
}

?>