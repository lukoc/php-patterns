<?php
namespace Patterns\Adapter\Ducks;

require_once 'autoloader.php';

$duck = new MallardDuck();

$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

echo "The Turkey says...";
$turkey->gobble();
$turkey->fly();

echo "The Duck says...";
testDuck($duck);

echo "The TurkeyAdapter says...";
testDuck($turkeyAdapter);


function testDuck(Duck $duck) {
    $duck->quack();
    $duck->fly();
}
