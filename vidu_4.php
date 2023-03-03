<?php
function isPrime($num) {
    if($num <= 1) {
        return false;
    }
    for($i = 2; $i <= sqrt($num); $i++) {
        if($num % $i == 0) {
            return false;
        }
    }
    return true;
}
echo isPrime(12) . "<br>";
echo isPrime(27);
