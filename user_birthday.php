<?php

$birth_year = $_POST['birth_year'] ?? '';
$current_year = date('Y');
$age = $current_year - $birth_year;
$is_prime = isPrime($age);
$is_even = isEven($age);

function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function isEven($n) {
    return $n % 2 == 0;
}

echo json_encode(['age' => $age,'is_prime' => $is_prime,'is_even' => $is_even]);

?>