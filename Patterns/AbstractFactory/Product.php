<?php
namespace Patterns\AbstractFactory;

interface Product
{
    public function calculatePrice() : int;
}