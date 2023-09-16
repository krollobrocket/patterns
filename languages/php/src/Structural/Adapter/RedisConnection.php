<?php

namespace Cyclonecode\Patterns\Structural\Adapter;

class RedisConnection implements RedisConnectionInterface
{
    public function connectToRedis()
    {
        echo 'Connection to Redis established!';
    }
}
