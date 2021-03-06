<?php

namespace Mediator;

use Mediator\Component\BaseComponent;

class Dispatcher implements MediatorInterface
{
    /** @var BaseComponent[]  */
    private $components = [];

    /**
     * @param BaseComponent $component
     */
    public function addComponent(BaseComponent $component)
    {
        $component->setMediator($this);
        $this->components[] = $component;
    }

    /**
     * @param BaseComponent $sender
     * @param string $event
     */
    public function notify(BaseComponent $sender, string $event)
    {
        if ($event == BaseComponent::EVENT_LAND_TO_1) {
            foreach ($this->components as $component) {
                if ($component->getUid() != $sender->getUid()) {
                    $component->notLandTo1();
                }
            }
        }

        if ($event == BaseComponent::EVENT_LAND_TO_2) {
            foreach ($this->components as $component) {
                if ($component->getUid() != $sender->getUid()) {
                    $component->notLandTo2();
                }
            }
        }
    }
}