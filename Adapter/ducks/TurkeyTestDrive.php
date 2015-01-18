<?php
namespace Patterns\Adapter\Ducks;

require_once 'autoloader.php';

$duck = new MallardDuck();
$duckAdapter = new DuckAdapter($duck);

for ($i = 0; $i<10 ; $i++) {
    echo "The DuckAdapter says...";
    $duckAdapter->gobble();
    $duckAdapter->fly();
}
 