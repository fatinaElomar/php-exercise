<?php 
function calculateArea($height, $width) {
    // Calculate the area 
    $height=5;
    $width=5;
    $area = $height * $width;

    // Output the result
    echo "Area is " . $area;
}
calculateArea( $height, $width);

// Call the function with the height and width values
calculateArea(5, 3);
?>