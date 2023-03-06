<?php


function isPalindrome($str) {
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/","",$str));
    return $str == strrev($str);
}

$input_str = $_GET['input_str'] ?? '';
$is_palindrome = isPalindrome($input_str);

echo json_encode(['is_palindrome' => $is_palindrome]);

?>
