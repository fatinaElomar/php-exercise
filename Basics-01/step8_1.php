<?php 

$grocery = array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
$first_three = array_slice($grocery, 0, 3);
$last_item = end($grocery);
echo "Hello Sir, do you have " . implode(", ", $first_three) . "? ";
echo "Also if you sell fruits can I find a $last_item?";
?>