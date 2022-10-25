<?php
echo "<pre>";
function sortList(array $list): array
{
    $sortedList = array();

    for ($i = 0, $total = count($list); $i < $total; $i++) {
        $min = min($list);
        $index = array_search($min, $list, true);
        $sortedList [] = $min;
        unset($list[$index]);
    }

    return $sortedList;
}

print_r(sortList([10, 1, 5, 7, 8, 9, 3, 4, 6, 2, 11, 90, 15]));

