<?php

function reverse($str) {
    $parts = preg_split('/(\d+)/', $str, -1, PREG_SPLIT_DELIM_CAPTURE);
    $result = '';
    foreach ($parts as $part) {
        if (is_numeric($part)) {
            $result .= strrev($part);
        } else {
            $result .= $part;
        }
    }
    return $result;
}

$input = $_GET['input'] ?? '';
$output = reverse($input);

echo json_encode(['output' => $output]);
?>