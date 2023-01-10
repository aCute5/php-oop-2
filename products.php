<?


class Product
{
    public $price;
    public $name;
    public $type;

    public function setPrice($price, $discount)
    {
        $this->price = $price - ($price / 100) * $discount;
    }
}
?>