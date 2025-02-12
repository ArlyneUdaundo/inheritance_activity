<?php
require_once 'Product.php';

class Food extends Product {
    private $expirationDate;

    public function __construct($name, $price, $category, $expirationDate) {
        parent::__construct($name, $price, $category);
        $this->expirationDate = $expirationDate;
    }

    public function getDetails() {
        return parent::getDetails() . ", Expiration Date: $this->expirationDate";
    }
}
?>
