<?php declare(strict_types=1);

namespace AlanVdb\Server;

use AlanVdb\Server\Definition\ServerEnvironmentServiceInterface;
use AlanVdb\Server\Definition\ServerEnvironmentInterface;

class ServerEnvironmentService implements ServerEnvironmentServiceInterface
{
    public function create(string $root) : ServerEnvironmentInterface
    {
        return new ServerEnvironment((new DotEnvParser($root))->parse());
    }
}
