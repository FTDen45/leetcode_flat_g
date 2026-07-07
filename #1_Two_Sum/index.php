<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];
        for ($i = 0;$i < count($nums); $i++) {
            $cur = $nums[$i];
            $x = $target - $cur;
            if (isset($map[$x])) return [$map[$x],$i];
            $map[$cur] = $i;
        }
        return null;
    }
}
$nums = [3,2,4]; $target = 6;
$nums = [3,3]; $target = 6;
$nums = [2,7,11,15]; $target = 9;
$obg = new Solution();
print_r($obg->twoSum($nums, $target));
