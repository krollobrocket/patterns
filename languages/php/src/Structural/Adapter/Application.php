<?php

namespace Cyclonecode\Patterns\Structural\Adapter;

class Application
{
    protected ?DatabaseConnectionInterface $connection;

    public function __construct(?DatabaseConnectionInterface $connection = null)
    {
        $this->connection = $connection;
    }

    public function setConnection(DatabaseConnectionInterface $connection)
    {
        $this->connection = $connection;
    }

    public function connect()
    {
        $this->connection->connect();
    }
}