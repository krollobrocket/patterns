<?php

namespace Cyclonecode\Patterns\Entity;

interface EntityInterface
{
    public function setLocation(int $x, int $y);
    public function getLocation(): Point;
}
