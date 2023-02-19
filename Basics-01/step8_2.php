<?php 

$grocery = array(
    'eggs' => array('balade', 'mazere3'),
    'milk' => array('Fresh', 'Taanayel'),
    'water-pack' => array('Tanoureen', 'Reem')
);

// Get the second brand of eggs
$eggs_brand2 = $grocery['eggs'][1];
echo $eggs_brand2; // outputs "mazere3"

// Get the first brand of water pack
$water_pack_brand1 = $grocery['water-pack'][0];
echo $water_pack_brand1; // outputs "Tanoureen"

foreach ($grocery as $item => $brands) {
    echo "Hey Sir, Please I need  $item, you can find the following brands: ";
    echo implode(", ", $brands) . "\n";}
?>