<?php


use CoffeeCode\Router\Router;

$router = new Router("https://apache");


$router->get("/", function ($data) {
    header("Content-type: application/json; charset=utf-8");
    $result = [
        "data" => [
            [
                "name"=> "Lio"
            ],
            [
                "name"=> "Luan"
            ]
        ]
    ];
    echo json_encode($result);
});

$router->namespace("App\\Controllers");

$router->get("/get/{id}", "MainController:getData");


$router->get('/404', function ($data) {
    echo "NOT FOUND";
});

$router->dispatch();


if ($router->error()) {
    $router->redirect("404");
}
