<?php

require_once 'autoloader.php';

$mallard = new MallardDuck;
$rubberDuckie = new RubberDuck;
$decoy = new DecoyDuck;
$model = new ModelDuck;

$mallard->performQuack();
$rubberDuckie->performQuack();
$decoy->performQuack();

$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered);
$model->performFly();