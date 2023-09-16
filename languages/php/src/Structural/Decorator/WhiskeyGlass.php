<?php

namespace Cyclonecode\Patterns\Structural\Decorator;

class WhiskeyGlass implements ProductInterface
{
    public function getPrice(): float
    {
        return 100;
    }

    public function getDescription(): string
    {
        return 'Whiskey glass';
    }
}
