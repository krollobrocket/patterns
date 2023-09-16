<?php

namespace Cyclonecode\Patterns\Behavior\Observer\Observer;

class EntityObserver implements ObserverInterface
{
    public function update(SubjectInterface $subject)
    {
        $location = $subject->getLocation();
        echo sprintf('Entity moved to %d, %d!', $location->x, $location->y);
    }
}
