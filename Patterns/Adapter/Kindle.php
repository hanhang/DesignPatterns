<?php
namespace Patterns\Adapter;

class Kindle implements EBookInterface
{
    private $page = 1;
    private $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
        if($this->page > 100){
            $this->page = 100;
        }
    }

    public function unlock()
    {
        $this->page = 1;
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}