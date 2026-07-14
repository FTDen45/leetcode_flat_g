<?php


class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s)
    {
        // val
        if (!$s) return "";
        if (strlen($s) == 1) return $s;
        // vars
        $start = 0;
        $end = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $odd = $this->expandAroundeCenter($s, $i, $i);
            $even = $this->expandAroundeCenter($s, $i, $i + 1);

            $max_len = max($odd, $even);
            if ($max_len > ($end - $start)) {
                $start = $i - floor(($max_len - 1) / 2);
                $end = $i + floor($max_len / 2);
            }
        }

        //if (strlen($s) == 2) return mb_substr($s, $start, ($end + 1));
        return mb_substr($s, $start, ($end + 1));
    }

    function expandAroundeCenter ($s, $left, $right) {
        while ($left >= 0 && $right < strlen($s) && $s[$left] == $s[$right]) {
            $left -= 1;
            $right += 1;
        }
        return $right - $left - 1;
    }
}

$str = "";
$str = "babad";
$str = "cbbd";
$str = "a";
$str = "bb";
$str = "ccc";

$obj = new Solution();
echo $obj->longestPalindrome($str);