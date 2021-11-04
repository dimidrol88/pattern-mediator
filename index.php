<?php

use Mediator\Component\Airplane;
use Mediator\Component\Helicopter;
use Mediator\Dispatcher;

require 'vendor/autoload.php';

// Client code
$mediator = new Dispatcher();

$c1 = new Helicopter();
$c2 = new Airplane();

$mediator->addComponent($c1);
$mediator->addComponent($c2);

echo "Client triggers operation landTo1.\n";
$c1->landTo1();

/**
Client triggers operation landTo1.
Helicopter landTo1.
Airplane notLandTo1.
*/

echo "\n";
echo "Client triggers operation landTo2.\n";
$c2->landTo2();

/**
Client triggers operation landTo2.
Airplane landTo2.
Helicopter notLandTo2.
 */

exit;