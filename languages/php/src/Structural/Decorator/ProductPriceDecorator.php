<?php

namespace Cyclonecode\Patterns\Structural\Decorator;

class ProductPriceDecorator extends AbstractProductDecorator
{
    protected float $price = 0;

    public function __construct(ProductInterface $product, float $price)
    {
        parent::__construct($product);
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->target->getPrice() + $this->price;
    }
}
