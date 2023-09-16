<?php

namespace Cyclonecode\Patterns\Structural\Proxy;

class Application
{
    protected array $pages = [];

    public function view()
    {
        foreach ($this->pages as $page) {
            $page->view();
        }
    }

    public function addPage(PageInterface $page)
    {
        $this->pages[] = $page;
    }

    public function removePage(PageInterface $page): array
    {
        $offset = array_search($page, $this->pages);
        $page = array_slice($this->pages, $offset, 1);
        return $page;
    }
}
