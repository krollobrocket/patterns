<?php

namespace Cyclonecode\Patterns\Structural\Proxy;

class PageProxy implements PageInterface
{
    protected PageInterface $target;
    protected bool $isProtected = false;
    protected bool $isTrusted = false;

    public function __construct(PageInterface $target)
    {
        $this->target = $target;
    }

    public function setProtected()
    {
        $this->isProtected = true;
    }

    public function view()
    {
        if ($this->isProtected && !$this->isTrusted) {
            echo 'Permission denied!';
            return;
        }
        $this->target->view();
    }
}
