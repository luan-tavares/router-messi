<?php

namespace App\Controllers;

class MainController
{
    public function __construct($route)
    {
    }

    public function getData($data)
    {
        $result = [
            "data" => [
                [
                    "id"=> $data["id"],
                    "name"=> "Lio"
                ]
            ]
        ];

        echo json_encode($result);

        return;
    }
    public function getLuan($data)
    {
        $result = [
            "data" => [
                [
                    "id"=> null,
                    "name"=> "Lio"
                ]
            ]
        ];

        echo json_encode($result);

        return;
    }
}
