<?php 

class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        // Format the price with two decimal places
        return '$' . number_format($this->price, 2);
    }

    public function showDetails() {
        echo "Product Details:" . PHP_EOL;
        echo "- ID: " . $this->id . PHP_EOL;
        echo "- Name: " . $this->name . PHP_EOL;
        echo "- Price: " . $this->getFormattedPrice() . PHP_EOL;
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
