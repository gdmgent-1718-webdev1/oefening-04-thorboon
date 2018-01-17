<?php
$values = [
    'string',
    true,
    1.52654,
    2,
    ['1', 'k', 'm', '6'],
    ];

function welkType($watIs){
    $type = gettype($watIs);
    return "De waarde is: ${type} .";

}

foreach ($values as $value) {
    echo welkType($value), PHP_EOL;

}
