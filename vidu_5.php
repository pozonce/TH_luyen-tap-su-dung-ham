<?php
function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $str));
    return $str == strrev($str);
}
echo isPalindrome("Racecar") . "<br>";
echo isPalindrome("Hello") . "<br>";
echo isPalindrome("lalaalal");
