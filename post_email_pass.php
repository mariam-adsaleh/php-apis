<?php

$email = $_POST['email'];
$password = $_POST['password'];

if (!isset($email) || !isset($password)) {
    $response = ['valid' => false];
    echo json_encode($response);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strpos($email, '-') !== false || strpos($email, '.') === false) {
    $response = ['valid' => false];
    echo json_encode($response);
    exit;
}

if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[_@$]/', $password)) {
    $response = ['valid' => false];
    echo json_encode($response);
    exit;
}

$response = ['valid' => true];
echo json_encode($response);

?>
