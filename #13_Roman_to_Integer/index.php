<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $map = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $res = 0;
        $prev = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $a = $map[$s[$i]];
            if ($i + 1 < strlen($s)) $b = $map[$s[$i+1]];
            else return $res + $a;
            if ($a < $b) {
                $res -= $a;
            } else {
                $res += $a;
            }
        }
        return $res;
    }
}

$obj = new Solution();
$s = "MCMXCIV"; echo $obj->romanToInt($s);