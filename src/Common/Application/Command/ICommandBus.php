<?php

declare(strict_types=1);

namespace App\Common\Application\Command;

interface ICommandBus
{
    public function handle(ICommand $command): ?string;
}
