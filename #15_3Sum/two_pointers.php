<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) { // [-4,-1,-1,0,1,2]
        $answer = [];
        $n = count($nums);
        sort($nums);
        for($i=0;$i<$n-2;$i++){
            if($i>0 && $nums[$i] == $nums[$i-1]) continue;
            $left=$i+1;
            $right=$n-1;
            while($left<$right){
                $sum=$nums[$i]+$nums[$left]+$nums[$right];
                if($sum == 0){
                    $answer[]=[$nums[$i],$nums[$left],$nums[$right]];
                    while($left<$right && $nums[$left] == $nums[$left+1]) $left++;
                    while($left<$right && $nums[$right] == $nums[$right-1]) $right--;
                    $left++;
                    $right--;
                } elseif($sum < 0) {
                    $left++;
                } else {
                    $right--;
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