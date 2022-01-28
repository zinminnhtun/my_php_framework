<?php

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

function view($name, $data=[],$withVueCli=false)
{
    extract(
        $data
    );
    
    if($withVueCli == false){
        return require "views/$name.view.php";
    }else{
        return require "public/index.php";
    }
}

function api($name,$data=[])
{
    extract(
        $data
    );
    return require "apiJson/$name.api.php";
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
