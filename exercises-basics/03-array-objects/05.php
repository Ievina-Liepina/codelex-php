<?php
//Given array. Program should display concatenated value of - John & Jane Doe`s


$item = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];


echo $item[0][0]['name'] . ' ' . '&' . ' ' . $item[0][1]['name'] . ' ' . $item[0][1]['surname'] . '\'s';
echo "\n";