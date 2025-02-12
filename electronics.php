<?php
require_once 'Product.php';

class Electronics extends Product {
    private $warrantyPeriod;

    public function __construct($name, $price, $category, $warrantyPeriod) {
        parent::__construct($name, $price, $category);
        $this->warrantyPeriod = $warrantyPeriod;
    }

    public function getDetails() {
        return parent::getDetails() . ", Warranty Period: $this->warrantyPeriod years";
    }
}
?>
