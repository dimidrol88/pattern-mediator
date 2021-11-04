<?php

namespace Mediator;

use Mediator\Component\BaseComponent;

interface MediatorInterface
{
    /**
     * @param BaseComponent $sender
     * @param string $event
     * @return mixed
     */
    public function notify(BaseComponent $sender, string $event);
}