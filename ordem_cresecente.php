<?php
echo "<pre>";
$list = array(10, 1, 5, 7, 8, 9, 3, 4, 6, 2, 11, 90, 15);
$sortedList = array();

for ($i = 0, $total = count($list); $i < $total; $i++) {
    $min = min($list);
    $index = array_search($min, $list, true);
    $sortedList []= $min;
    unset($list[$index]);
}

