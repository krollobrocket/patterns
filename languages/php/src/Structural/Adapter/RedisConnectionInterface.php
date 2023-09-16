<?php

namespace Cyclonecode\Patterns\Structural\Adapter;

interface RedisConnectionInterface
{
    public function connectToRedis();
}
