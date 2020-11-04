<?php

$email = $_POST['email'];
$password = $_POST['password'];

if (strpos($email, '@') === false) {
    http_response_code(400);
    die("Error. You should specify correct email address!");
}

if (strlen($password) < 6) {
    http_response_code(400);
    die("Error. You should set strong password with at least 6 symbols!");
}

$string = 'email:' . $email . ';password:' . $password . PHP_EOL;


file_put_contents('users.txt', $string, FILE_APPEND);
http_response_code(201);
die("SUCCESS!");

//mysqli