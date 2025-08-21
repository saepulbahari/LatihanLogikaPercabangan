<?php
 
 class notebook {
    public $brand;
    public $model;
    public $processor;
    public $ram;
    public $storage;
    public $graphics;
    public $price;

    function __construct(string $brand,string $model,string $processor,string $ram,string $storage,string $graphics,string $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->processor = $processor;
        $this->ram = $ram;
        $this->storage = $storage;
        $this->graphics = $graphics;
        $this->price = $price;
    }

    function  shut (string $message = "Goodbye!") : string
     {
        echo "Shutting down the notebook: " . $message;
    }   
 }

    $notebook = new Notebook ("Asus", "ROG Zephyrus", "AMD Ryzen 9", "32GB", "1TB SSD", "NVIDIA RTX 3080", 2499.99);  
    $notebook1 = new Notebook ("Dell", "XPS 15", "Intel Core i7", "16GB", "512GB SSD", "NVIDIA GTX 1650", 1999.99); 

    foreach ([$notebook, $notebook1] as $item) {
        echo "\n Brand: " . $item->brand ;
        echo "Model: " . $item->model ;
        echo "Processor: " . $item->processor ;
        echo "RAM: " . $item->ram ;
        echo "Storage: " . $item->storage ;
        echo "Graphics: " . $item->graphics ;
        echo "Price: $" . $item->price ;
    }
    
?> 