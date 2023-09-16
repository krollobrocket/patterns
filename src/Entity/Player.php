<?php

namespace Cyclonecode\Patterns\Entity;

use Cyclonecode\Patterns\Observer\ObserverInterface;
use Cyclonecode\Patterns\Observer\AbstractSubject;

class Player extends AbstractSubject implements EntityInterface
{
    public array $observers = [];
    public Point $location;

    public function __construct(int $x = 0, int $y = 0)
    {
        $this->location = new Point($x, $y);
    }

    public function setLocation(int $x, int $y)
    {
        $this->location->x = $x;
        $this->location->y = $y;
        $this->notify();
    }

    public function getLocation(): Point
    {
        return $this->location;
    }
}
