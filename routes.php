<?php

// https://localhost:8000.com
// $router->register([
//     "" => "controllers/IndexController.php",
//     "about" => "controllers/AboutController.php",
//     "contact" => "controllers/ContactController.php",
//     "orders" => "controllers/OrdersController.php",
//     "customers" => "controllers/CustomersController.php",
//     "names" => "controllers/add-name.php",
// ]);

use controllers\PagesController;
use UsersController;

$router->get("", [PagesController::class,"home"]);
$router->get("about", [PagesController::class,"about"]);
$router->get("contact", [PagesController::class,"contact"]);
$router->get("orders", [PagesController::class,"order"]);
$router->get("customers", [PagesController::class,"customer"]);


$router->get("users", [UsersController::class,"index"]);


$router->post("names", [PagesController::class,"createUsers"]);




// $router->get("about", "PagesController@about");
// $router->get("contact", "PagesController@contact");
// $router->get("orders", "PagesController@order");
// $router->get("customers", "PagesController@customer");
// $router->get("users", "UsersController@index");

// $router->post("names", "PagesController@createUsers");

// dd($router->routes);
