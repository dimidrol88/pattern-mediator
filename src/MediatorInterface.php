<?php

namespace Mediator;

use Mediator\Component\BaseComponent;

interface MediatorInterface
{
    public function notify(BaseComponent $sender, string $event);
}