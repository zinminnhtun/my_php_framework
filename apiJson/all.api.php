<?php
header("Content_Type: application/json;charset=UTF-8");

$users = json_encode($users,JSON_UNESCAPED_UNICODE);
print_r($users);