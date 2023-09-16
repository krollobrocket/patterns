<?php

namespace Cyclonecode\Patterns\Observer;

interface ObserverInterface
{
    public function update(SubjectInterface $subject);
}
