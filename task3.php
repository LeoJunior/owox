<?php 

interface ProductInterface
{
    public function getId();
    public function getModel();
    public function getPrice();
    public function getType();
}

class Keyboard implements ProductInterface
{
    protected $_id;
    protected $_model;
    protected $_price;

    public function __construct($product)
    {
        $this->_id = $product['id'];
        $this->model = $product['model'];
        $this->_price = $product['price'];
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getModel()
    {
        return $this->_model;
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function getType()
    {
        return 'keyboard';
    }
}

class Mouse implements ProductInterface
{
    protected $_id;
    protected $_model;
    protected $_price;

    public function __construct($product)
    {
        $this->_id = $product['id'];
        $this->model = $product['model'];
        $this->_price = $product['price'];
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getModel()
    {
        return $this->_model;
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function getType()
    {
        return 'keyboard';
    }
}

$products = array(
    array(
        'id'    => 1,
        'model' => 'Logitech k810',
        'price' => '149.99',
        'type'  => 'keyboard'
    ),
    array(
        'id'    => 12,
        'model' => 'Logitech G700',
        'price' => '139.99',
        'type'  => 'mouse'
    )
);

$cart = array();

foreach($products as $product)
{
    if(class_exists($product['type']))
    {
        $cart[] = new $product['type']($product);
    }
    else
    {
        throw new InvalidArgumentException("Тип ".$product['type']." не найден");
    }
}

echo '<pre>';
print_r($cart);
echo '<pre>';﻿


	
?>