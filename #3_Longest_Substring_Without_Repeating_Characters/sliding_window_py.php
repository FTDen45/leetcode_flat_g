<?php

class Solution {
    public function lengthOfLongestSubstring(string $s): int {
        $left = 0;
        $max_length = 0;
        $char_set = [];

        for ($right = 0; $right < strlen($s); $right++) {
            while (isset($char_set[$s[$right]])) {
                unset($char_set[$s[$left]]);
                $left++;
            }

            $char_set[$s[$right]] = true;
            $max_length = max($max_length, $right - $left + 1);
        }

        return $max_length;
    }
}

// ✅ Тестирование
$solution = new Solution();

echo $solution->lengthOfLongestSubstring("abcabcbb") . "\n"; // 3 ("abc")
echo $solution->lengthOfLongestSubstring("bbbbb") . "\n";     // 1 ("b")
echo $solution->lengthOfLongestSubstring("pwwkew") . "\n";    // 3 ("wke")
echo $solution->lengthOfLongestSubstring("") . "\n";          // 0
echo $solution->lengthOfLongestSubstring("dvdf") . "\n";      // 3 ("vdf")

/*
Вывод:
3
1
3
0
3
*/