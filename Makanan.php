<?php
class Makanan
{
    public $name = "Nasi Goreng";
    private $type = "Menu Utama";
    protected $price = "25000";

    public function getType()
    {
        return $this->type;
    }
}

class Harga extends Makanan{
    public function getPrice(){
        return $this->price;
    }
}

$makanan1 = new Makanan();
echo $makanan1->name;

echo "<br>";

echo $makanan1->getType();

echo "<br>";

$makanan1 = new Harga();
echo $makanan1->getPrice();
