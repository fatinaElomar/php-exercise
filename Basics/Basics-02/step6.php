<?php
function Digitsum($num) {
    $sum = 0;
    for ($i = 0; $i < strlen($num); $i++) {
      $sum += $num[$i];
    }
    return $sum;
  }
  echo Digitsum('654321');
  echo Digitsum('66677654321');

  ?>