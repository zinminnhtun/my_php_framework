<?php
header('Content-Type: application/json; charset=utf-8');
$users = json_encode($users,JSON_UNESCAPED_UNICODE);

print_r($users);