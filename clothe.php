<?php
require_once 'Product.php';

class Clothe extends Product {
    private $size;
    private $material;

    public function __construct($name, $price, $category, $size, $material) {
        parent::__construct($name, $price, $category);
        $this->size = $size;
        $this->material = $material;
    }

    public function getDetails() {
        return parent::getDetails() . ", Size: $this->size, Material: $this->material";
    }
}
?>
