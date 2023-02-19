<?php 

function Power($num) {
    if ($num <= 0) {
      return false;
    }
    while ($num > 1) {
      if ($num % 2 != 0) {
        return false;
      }
      $num = $num / 2;
    }
    return true;
  }
  if (Power(4)) {
    echo "4 is a power of 2";
  } else {
    echo "4 is not a power of 2";
  }

?>