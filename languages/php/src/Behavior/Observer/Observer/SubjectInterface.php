<?php

namespace Cyclonecode\Patterns\Behavior\Observer\Observer;

interface SubjectInterface
{
    public function detatch(ObserverInterface $observer);
    public function attach(ObserverInterface $observer);
    public function notify();
}
