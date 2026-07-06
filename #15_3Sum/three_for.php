<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $answer = [];
        for ($i=0;$i<count($nums);$i++) {
            for ($j=$i+1;$j<count($nums);$j++) {
                for ($k=$j+1;$k<count($nums);$k++) {
                    $sum = $nums[$i] + $nums[$j] + $nums[$k];
                    if ($sum == 0) {
                        $sort = [$nums[$i],$nums[$j],$nums[$k]];
                        rsort($sort);
                        $check = 0;
                        for ($l=0;$l<count($answer);$l++) {
                            if ($answer[$l][0] == $sort[0]) $check++;
                            if ($answer[$l][1] == $sort[1]) $check++;
                            if ($answer[$l][2] == $sort[2]) $check++;
                            if ($check == 3) break;
                            $check = 0;
                        }
                        if ($check != 3) $answer[] = $sort;
                    }
                }
            }
        }
        return $answer;
    }
}

$obj = new Solution();
$res1 = $obj->threeSum([-1,0,1,2,-1,-4]);
$res2 = $obj->threeSum([0,1,1]);
$res3 = $obj->threeSum([0,0,0]);

print_r($res1);
print_r($res2);
print_r($res3);