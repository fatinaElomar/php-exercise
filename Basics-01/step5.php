<?php
$course_name="flutter";
$enrolled_students=20;
$prices = array(12.33, -1.123, 99.99);
$on_discount = true;
echo "Course name: " . $course_name . "<br>";
echo "Enrolled students: " . $enrolled_students . "<br>";
echo "Prices: $" . $prices[0] . ", $" . $prices[1] . ", $" . $prices[2] . "<br>";
echo "On discount: " . ($on_discount ? "Yes" : "No") . "<br>";

?>