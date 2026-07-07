<?php



class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $dummyHead = new ListNode();
        $curr = $dummyHead;
        $carry = 0;
        while ($l1 !== null || $l2 !== null || $carry != 0) {
            $x = $l1 ? $l1->val : 0;
            $y = $l2 ? $l2->val : 0;
            $sum = $carry + $x + $y;
            $carry = (int)($sum / 10);
            $curr->next = new ListNode($sum % 10);
            $curr = $curr->next;
            $l1 = $l1 ? $l1->next : null;
            $l2 = $l2 ? $l2->next : null;
        }
        $result = $dummyHead->next;
        unset($dummyHead);
        return $result;
    }
}

$l1 = [2,4,3]; $l2 = [5,6,4];
$l1 = [0]; $l2 = [0];
$l1 = [9,9,9,9,9,9,9]; $l2 = [9,9,9,9];
function buildListNode($array) {
    $head = null;
    $current = null;
    foreach ($array as $val) {
        $newNode = new ListNode($val);
        if ($head === null) {
            $head = $newNode;
            $current = $head;
        } else {
            $current->next = $newNode;
            $current = $current->next;
        }
    }
    return $head;
}
$l1_n = buildListNode($l1); $l2_n = buildListNode($l2);
$obg = new Solution();
print_r($obg->addTwoNumbers($l1_n, $l2_n));
