<?php
namespace Patterns\Adapter;

interface EBookInterface
{
    public function unlock();
    public function pressNext();
    public function getPage(): array;
}