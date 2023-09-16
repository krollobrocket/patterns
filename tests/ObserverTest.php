<?php

namespace Cyclonecode\Patterns\Tests;

use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testAttachEntityObserver()
    {
        $player = new \Cyclonecode\Patterns\Entity\Player();
        $observer = new \Cyclonecode\Patterns\Observer\EntityObserver();
        $player->attach($observer);
        $this->expectOutputString('Entity moved to 0, 100!');
        $player->setLocation(0, 100);
    }

    public function testAttachPlayerObserver()
    {
        $player = new \Cyclonecode\Patterns\Entity\Player();
        $observer = new \Cyclonecode\Patterns\Observer\PlayerObserver();
        $player->attach($observer);
        $this->expectOutputString('Player moved to 5, 5!');
        $player->setLocation(5, 5);
    }

    public function testNotifySingleObserver()
    {
        $player = new \Cyclonecode\Patterns\Entity\Player();
        $observer = new \Cyclonecode\Patterns\Observer\PlayerObserver();
        $player->attach($observer);
        $this->expectOutputString('Player moved to 1, 2!');
        $player->setLocation(1, 2);
    }

    public function testNotifyMultipleObservers()
    {
        $player = new \Cyclonecode\Patterns\Entity\Player();
        $observer = new \Cyclonecode\Patterns\Observer\EntityObserver();
        $player->attach($observer);
        $observer = new \Cyclonecode\Patterns\Observer\PlayerObserver();
        $player->attach($observer);
        $this->expectOutputString('Entity moved to 10, 0!Player moved to 10, 0!');
        $player->setLocation(10, 0);
    }

    public function testDetatchObserver()
    {
        $player = new \Cyclonecode\Patterns\Entity\Player();
        $observer1 = new \Cyclonecode\Patterns\Observer\EntityObserver();
        $player->attach($observer1);
        $player = new \Cyclonecode\Patterns\Entity\Player();
        $observer2 = new \Cyclonecode\Patterns\Observer\PlayerObserver();
        $player->attach($observer2);
        $player->detatch($observer1);
        $this->expectOutputString('Player moved to 60, 60!');
        $player->setLocation(60, 60);
    }
}
