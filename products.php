<?
include __DIR__ . '/registered.php';


class Product
{
    public $price;
    public $name;
    public $type;

    public function setPrice($price)
    {
        $this->price -= $price - ($price / 100) * $discount;
    }
}
?>