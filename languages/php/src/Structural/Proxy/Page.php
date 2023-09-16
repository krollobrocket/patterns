<?php

namespace Cyclonecode\Patterns\Structural\Proxy;

class Page implements PageInterface
{
    public function view()
    {
        echo 'Permission granted!';
    }
}
