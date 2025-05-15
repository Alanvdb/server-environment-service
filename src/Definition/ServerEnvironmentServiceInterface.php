<?php declare(strict_types=1);

namespace AlanVdb\Server\Definition;

interface ServerEnvironmentServiceInterface
{
    public function create(string $root) : ServerEnvironmentInterface;
}
