<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        // 32-bit integer bounds
        $INT_MIN = -(2 ** 31);      // -2147483648
        $INT_MAX = (2 ** 31) - 1;   // 2147483647
        
        // vars
        $reversed = 0;
        // loop
        while ($x != 0) {
            $digit = $x % 10;
            $reversed = $reversed * 10 + $digit;
            $x = (int)($x / 10);
        }
        // check if reversed number is within 32-bit integer range
        if ($reversed < $INT_MIN || $reversed > $INT_MAX) {
            return 0;
        }
        // output
        return $reversed;
    }
}

$x = 1534236469;
$x = 123;
$x = 120;
$x = -123;

$obj = new Solution();
echo $obj->reverse($x);