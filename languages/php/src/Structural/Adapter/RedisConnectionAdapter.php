<?php

namespace Cyclonecode\Patterns\Structural\Adapter;

class RedisConnectionAdapter implements DatabaseConnectionInterface
{
    protected RedisConnectionInterface $adaptee;

    public function __construct(RedisConnectionInterface $connection)
    {
        $this->adaptee = $connection;
    }

    public function connect()
    {
        $this->adaptee->connectToRedis();
    }
}
