<?php

function Sort(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n-1; $i++) {
        $min = $i;
        for ($j = $i+1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
}

$numbers_str = $_GET['numbers'] ?? '';
$numbers_list = array_filter(array_map('intval', explode(',', $numbers_str)));

Sort($numbers_list);

echo json_encode(['sorted_numbers' => $numbers_list]);

?>