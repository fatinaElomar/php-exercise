<?php
function isArmstrong($num) {
  $sum = 0;
  $nbr = $num;

  while ($nbr > 0) {
    $digit = $nbr % 10;
    $sum += $digit ** 3;
    $temp = (int)($nbr / 10);
  }

  if ($num == $sum) {
    return true;
  } else {
    return false;
  }
}

echo isArmstrong(153); // outputs true
echo isArmstrong(370); // outputs true
echo isArmstrong(371); // outputs true
echo isArmstrong(9474); // outputs true
echo isArmstrong(120); // outputs false
?>
