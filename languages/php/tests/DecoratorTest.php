<?php

namespace Cyclonecode\Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Cyclonecode\Patterns\Structural\Decorator;

class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $product = new Decorator\Skateboard();
        $this->assertEquals(500, $product->getPrice());
        $decorator = new Decorator\ProductPriceDecorator($product, 100);
        $decorator = new Decorator\ProductPriceDecorator($decorator, 200);
        $this->assertEquals(500 + 300, $decorator->getPrice());
    }
}
