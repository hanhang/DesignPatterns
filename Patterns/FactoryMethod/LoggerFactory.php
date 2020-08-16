<?php
namespace Patterns\FactoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}