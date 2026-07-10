<?php


class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $prefix = $strs[0];
        $pref_len = strlen($prefix);
        $perf_len_loop = $pref_len;
        for ($j = 1; $j < 200; $j++) {
            $tmp = $strs[$j] ?? '';
            if (isset($strs[$j]) && $strs[$j] == '') return "";
            if (empty($strs[$j])) return $prefix;
            $next_str = $strs[$j];
            for ($i = 0; $i < $perf_len_loop; $i++) {
                if (mb_substr($next_str, 0, $pref_len) != $prefix) {
                    $pref_len--;
                    $prefix = mb_substr($prefix, 0, $pref_len);
                }
                if ($pref_len == 0) return "";
            }
            $perf_len_loop = $pref_len;
        }
        return $prefix;
    }
}

$strs = ["dog", "racecar", "car"];
$strs = ["flower", "flow", "flight"];
$strs = ["flower","flower","flower","flower"];
$strs = ["a","b"];
$strs = ["abab","aba",""];
$obg = new Solution();
echo $obg->longestCommonPrefix($strs);