<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $s = mb_str_split($s);
        $left = $max_length = 0;
        $char_set = $s;
        for ($right = 0; $right < count($s); $right++) {
            while (isset($char_set[0]) && $s[$right] == $char_set[0]) {
                unset($char_set[0]);
                $char_set = array_values($char_set);
            }
            $char_set[] = $s[$right];
            $max_length = max($max_length, $right - $left + 1);

        }
        return $max_length;
    }
}

$obj = new Solution();
echo $res1 = $obj->lengthOfLongestSubstring("abcabcbb");
echo "\n";
echo $res2 = $obj->lengthOfLongestSubstring("bbbbb");
echo "\n";
echo $res3 = $obj->lengthOfLongestSubstring("pwwkew");