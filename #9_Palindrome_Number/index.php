<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $x = (string)$x;
        $length = strlen($x);
        $length_half = (int)round($length / 2);
        for ($i = 0; $i < $length_half; $i++) {
            $end_index = $length - 1 - $i;
            if ($x[$i] != $x[$end_index]) return false;
        }
        return true;
    }
}
$x = -121;
$x = 10;
$x = 121;
$obj = new Solution();
$res = $obj->isPalindrome($x);
if ($res) echo "true"; else echo "false";