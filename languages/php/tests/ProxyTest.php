<?php

namespace Cyclonecode\Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Cyclonecode\Patterns\Structural\Proxy;

class ProxyTest extends TestCase
{
    protected Proxy\Application $app;
    protected Proxy\PageProxy $proxy;
    protected Proxy\PageInterface $page;

    public function setUp(): void
    {
        $this->app = new Proxy\Application();
        $this->page = new Proxy\Page();
        $this->proxy = new Proxy\PageProxy($this->page);
    }

    public function testTrustedVisitor()
    {
        $this->app->addPage($this->page);
        $this->expectOutputString('Permission granted!');
        $this->app->view();
    }

    public function testUntrustedVisitor()
    {
        $this->proxy->setProtected();
        $this->app->addPage($this->proxy);
        $this->expectOutputString('Permission denied!');
        $this->app->view();
    }
}
