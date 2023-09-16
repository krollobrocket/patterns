<?php

namespace Cyclonecode\Patterns\Behavior\Observer\Observer;

abstract class AbstractSubject implements SubjectInterface
{
    /** @var ObserverInterface[] */
    protected array $observers = [];

    public function attach(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function detatch(ObserverInterface $observer)
    {
        $offset = array_search($observer, $this->observers);
        if ($offset !== false) {
            array_splice($this->observers, $offset, 1);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
}