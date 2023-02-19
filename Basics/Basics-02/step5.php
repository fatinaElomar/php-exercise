<?php function wordToDigit($word) {
  switch(strtolower($word)) {
    case "zero":
      return 0;
    case "one":
      return 1;
    case "two":
      return 2;
    case "three":
      return 3;
    case "four":
      return 4;
    case "five":
      return 5;
    case "six":
      return 6;
    case "seven":
      return 7;
    case "eight":
      return 8;
    case "nine":
      return 9;
    default:
      return null;
  }
}

echo wordToDigit("zero"); 
echo wordToDigit("nine"); 
echo wordToDigit("one");
?>