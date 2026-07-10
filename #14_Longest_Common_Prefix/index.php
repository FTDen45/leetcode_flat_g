<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix = '';
        for ($j = 0; $j < 200; $j++) {
            $tmp = $strs[0][$j];
            for ($i = 0; $i < count($strs); $i++) {
                if ($tmp != $strs[$i][$j]) return $prefix;
            }
            $prefix .= $tmp;
        }
        return $prefix;
    }
}

$strs = ["flower","flow","flight"];
$strs = ["dog","racecar","car"];
$obg = new Solution();
echo $obg->longestCommonPrefix($strs);