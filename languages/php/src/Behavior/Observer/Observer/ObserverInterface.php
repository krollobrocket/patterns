<?php

namespace Cyclonecode\Patterns\Behavior\Observer\Observer;

interface ObserverInterface
{
    public function update(SubjectInterface $subject);
}
