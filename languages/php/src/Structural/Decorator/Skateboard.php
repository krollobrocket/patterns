<?php

namespace Cyclonecode\Patterns\Structural\Decorator;

class Skateboard implements ProductInterface
{
    public function getPrice(): float
    {
        return 500;
    }

    public function getDescription(): string
    {
        return 'Skateboard';
    }
}
