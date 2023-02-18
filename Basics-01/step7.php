<?php
$birth_year = 2005;
$current_year = date('Y');

// Check if the difference is greater than 18
if ($current_year - $birth_year > 18) {
    echo "You can drive";
} else {
    echo "You're still a kid, go and play GTA";
}
?>