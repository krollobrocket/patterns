<?php

namespace Cyclonecode\Patterns\Structural\Decorator;

abstract class AbstractProductDecorator implements ProductInterface
{
    public function __construct(ProductInterface $target)
    {
        $this->target = $target;
    }

    public function getPrice(): float
    {
        return $this->target->getPrice();
    }

    public function getDescription(): string
    {
        return $this->target->getDescription();
    }
}
