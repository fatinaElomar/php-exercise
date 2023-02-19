<?php
function isPrime($num) {
    // Check if the number is less than 2
    if ($num < 2) {
      return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
      if ($num % $i == 0) {
        return false;
      }
    }
  
    // If the number is not divisible by any number from 2 to the square root of the number, it is prime
    return true;
  }
  $num1 = 5;
  $num2 = 20;
  
  if (isPrime($num1)) {
    echo "$num1 is a prime number.<br>";
  } else {
    echo "$num1 is not a prime number.<br>";
  }
  
  if (isPrime($num2)) {
    echo "$num2 is a prime number.<br>";
  } else {
    echo "$num2 is not a prime number.<br>";
  }
?>
