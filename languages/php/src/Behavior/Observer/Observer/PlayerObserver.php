<?php

namespace Cyclonecode\Patterns\Behavior\Observer\Observer;

class PlayerObserver implements ObserverInterface
{
    public function update(SubjectInterface $subject)
    {
        $location = $subject->getLocation();
        echo sprintf('Player moved to %d, %d!', $location->x, $location->y);
    }
}
