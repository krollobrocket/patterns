<?php

namespace Cyclonecode\Patterns\Structural\Decorator;

abstract class AbstractProduct
{
    public abstract function isValid(): bool;
}
