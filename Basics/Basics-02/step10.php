<?php 
function isPalindrome($strrev) {
  $len = strlen($strrev);
  for ($i = 0; $i < $len/2; $i++) {
    if ($strrev[$i] != $strrev[$len-$i-1]) {
      return false;
    }
  }
  return true;
}
if (isPalindrome("racecar")) {
    echo "The string is a palindrome";
  } else {
    echo "The string is not a palindrome";
  }
  ?>