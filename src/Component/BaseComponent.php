<?php

namespace Mediator\Component;

use Mediator\MediatorInterface;

class BaseComponent
{
    const EVENT_LAND_TO_1 = 'land-to-1';
    const EVENT_LAND_TO_2 = 'land-to-2';

    /**
     * @var MediatorInterface|null
     */
    protected $mediator;

    private $uid;

    public function __construct(MediatorInterface $mediator = null)
    {
        $this->mediator = $mediator;
        $this->uid = uniqid();
    }

    /**
     * @return string
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }

    public function landTo1()
    {
        echo static::class . " landTo1.\n";
        $this->mediator->notify($this, self::EVENT_LAND_TO_1);
    }

    public function landTo2()
    {
        echo static::class . " landTo2.\n";
        $this->mediator->notify($this, self::EVENT_LAND_TO_2);
    }

    public function notLandTo1()
    {
        echo static::class . " notLandTo1.\n";
    }

    public function notLandTo2()
    {
        echo static::class . " notLandTo2.\n";
    }
}