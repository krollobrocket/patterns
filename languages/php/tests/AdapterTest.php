<?php

namespace Cyclonecode\Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Cyclonecode\Patterns\Structural\Adapter;

class AdapterTest extends TestCase
{
    protected Adapter\Application $app;
    protected Adapter\DatabaseConnectionInterface $adapter;

    public function setUp(): void
    {
        $this->app = new Adapter\Application();
    }

    public function testMySQLConnection()
    {
        $this->app->setConnection(new Adapter\MySQLConnection());
        $this->expectOutputString('Connection to MySQL established!');
        $this->app->connect();
    }

    public function testRedisConnection()
    {
        $this->expectException(\TypeError::class);
        $this->app->setConnection(new Adapter\RedisConnection());
    }

    public function testRedisAdapterConnection()
    {
        $this->app->setConnection(new Adapter\RedisConnectionAdapter(new Adapter\RedisConnection()));
        $this->expectOutputString('Connection to Redis established!');
        $this->app->connect();
    }
}
