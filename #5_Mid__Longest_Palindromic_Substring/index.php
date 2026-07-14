<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $res_max = "";
        $len = strlen($s);
        $len_max = 0;
        $len_cur = 0;
        $k = 1;
        for ($i = 0; $i < $len; $i++) {
            if ($i > 0) $left = substr($s, $i - $k, 1);
            else $left = substr($s, $i, 1);
            if ($i < $len) $right = substr($s, $i + $k, 1);
            else $right = substr($s, $i, 1);
            $res_cur = substr($s, $i, 1);
            while ($left == $right) {
                $res_cur = $left . $res_cur . $right;
                $len_cur = 1 + $k * 2;
                $k++;
                if (($i - $k) >= 0) $left = substr($s, $i - $k, 1);
                else break;
                if (($i + $k) < $len) $right = substr($s, $i + $k, 1);
                else break;
            }
            if ($len_cur > $len_max) {
                $len_max = $len_cur;
                $res_max = $res_cur;
            }
            $res_cur = "";
            $k = 1;
        }

        return $res_max;
    }
}

$str = "cbbd";
$str = "bcdad";

$obj = new Solution();
echo $obj->longestPalindrome($str);