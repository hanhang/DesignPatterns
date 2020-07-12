<?php
namespace Patterns\AbstractFactory;

class ProductFactory
{
    const SHIPPING_COSTS = 50;

    public function createDigitalProduct(int $price) : Product
    {
        return new DigitalProduct($price);
    }

    public function createShippableProduct(int $price) : Product
    {
        return new ShippableProduct($price, self::SHIPPING_COSTS);
    }
}