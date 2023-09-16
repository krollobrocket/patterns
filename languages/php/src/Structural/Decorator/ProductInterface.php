<?php

namespace Cyclonecode\Patterns\Structural\Decorator;

interface ProductInterface
{
    public function getPrice(): float;
    public function getDescription(): string;
}
