<?php

namespace Cyclonecode\Patterns\Behavior\Observer\Entity;

interface EntityInterface
{
    public function setLocation(int $x, int $y);
    public function getLocation(): Point;
}
