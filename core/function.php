<?php
//dd
function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
}

function dp($data)
{
    echo "<pre>";
    die(print_r($data));
}

function view($name, $data=[])
{
    extract(
        $data
    );
    
    return require "views/$name.view.php";
}

function redirect($uri)
{
    header("location: $uri");
}

function request($name)
{
    if ($_SERVER['REQUEST_METHOD']==="POST") {
        return $_POST[$name];
    }
    if ($_SERVER['REQUEST_METHOD']==="GET") {
        return $_GET[$name];
    }
}
