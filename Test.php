<?php

$arrayOne = array(1, 2, 3);
$arrayTwo = array('B1', 'B2', 'B3');

$max = max(count($arrayOne), count($arrayTwo));

$result = array();

for ($i = 0; $i < $max; $i++) {
    if (count($arrayOne) > $i) {
        $result[] = $arrayOne[$i];
    }
    if (count($arrayTwo) > $i) {
        $result[] = $arrayTwo[$i];
    }
}

echo "<pre>";
print_r($result);
echo "</pre>";
