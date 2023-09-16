<?php

namespace Cyclonecode\Patterns\Behavior\Tests;

use PHPUnit\Framework\TestCase;
use Cyclonecode\Patterns\Behavior\Observer;

class ObserverTest extends TestCase
{
    /** @var Observer\Entity\Player */
    protected Observer\Entity\Player $player;
    /** @var Observer\ObserverInterface[] */
    protected array $observers = [];

    public function setUp(): void
    {
        $this->player = new Observer\Entity\Player();
        $this->observers[] = new Observer\Observer\EntityObserver();
        $this->observers[] = new Observer\Observer\PlayerObserver();
    }

    public function testEmptyObserver()
    {
        $this->expectOutputString('');
        $this->player->setLocation(0, 100);
    }

    public function testAttachEntityObserver()
    {
        $this->player->attach($this->observers[0]);
        $this->expectOutputString('Entity moved to 0, 100!');
        $this->player->setLocation(0, 100);
    }

    public function testAttachPlayerObserver()
    {
        $this->player->attach($this->observers[1]);
        $this->expectOutputString('Player moved to 5, 5!');
        $this->player->setLocation(5, 5);
    }

    public function testNotifySingleObserver()
    {
        $this->player->attach($this->observers[1]);
        $this->expectOutputString('Player moved to 1, 2!');
        $this->player->setLocation(1, 2);
    }

    public function testNotifyMultipleObservers()
    {
        $this->player->attach($this->observers[0]);
        $this->player->attach($this->observers[1]);
        $this->expectOutputString('Entity moved to 10, 0!Player moved to 10, 0!');
        $this->player->setLocation(10, 0);
    }

    public function testDetatchObserver()
    {
        $this->player->attach($this->observers[0]);
        $this->player->attach($this->observers[1]);
        $this->player->detatch($this->observers[0]);
        $this->expectOutputString('Player moved to 60, 60!');
        $this->player->setLocation(60, 60);
    }
}
