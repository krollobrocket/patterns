<?php

namespace Cyclonecode\Patterns\Observer;

interface SubjectInterface
{
    public function detatch(ObserverInterface $observer);
    public function attach(ObserverInterface $observer);
    public function notify();
}
