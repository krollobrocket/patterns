<?php

namespace Cyclonecode\Patterns\Structural\Adapter;

class MySQLConnection implements DatabaseConnectionInterface
{
    public function connect()
    {
        echo 'Connection to MySQL established!';
    }
}
