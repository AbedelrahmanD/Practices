<?php
// header("Content-Type: application/json");
if (!isset($_POST["country_id"])) {
    exit;
}
$cities = [
    "1" => [
        [
            "id" => "1",
            "name" => "Saiada"
        ],
        [
            "id" => "2",
            "name" => "Beirut"
        ]

    ],
    "2" => [
        [
            "id" => "1",
            "name" => "Riyadh"
        ],
        [
            "id" => "2",
            "name" => "Jeddah"
        ]

    ]
];
usleep(1000000);
echo json_encode($cities[$_POST["country_id"]]);
