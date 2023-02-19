<?php
function greaterFn($num) {
  if ($num > 30) {
    return "$num is greater than 30.";
  } elseif ($num > 20) {
    return "$num is greater than 20.";
  } elseif ($num > 10) {
    return "$num is greater than 10.";
  } else {
    return "$num is not greater than 10, 20, or 30.";
  }
}

echo greaterFn(40);
echo greaterFn(21); 
echo greaterFn(12); 
echo greaterFn(8); 
?>