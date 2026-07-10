<?php


class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $pref = $strs[0];
        $pref_len = strlen($pref);

        for ($i = 1; $i < count($strs); $i++) {
            while ($pref != mb_substr($strs[$i], 0, $pref_len)) {
                $pref_len -= 1;
                if ($pref_len == 0) return "";
                $pref = mb_substr($pref, 0, $pref_len);
            }
        }
        return $pref;
    }
}

$strs = ["flower","flower","flower","flower"];
$strs = ["a","b"];
$strs = ["flower", "flow", "flight"];
$strs = ["dog", "racecar", "car"];
$strs = ["abab","aba",""];
$obg = new Solution();
echo $obg->longestCommonPrefix($strs);