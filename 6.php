<?php

/*
Utilizzare questo array di partenza e
stampare tutti gli insegnanti in un rettangolo grigio e tutti i PM in un
rettangolo verde.
*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri',
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini',
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini',
        ]
    ]
];

for($i=0; $i< count($db["teachers"]; $i++)){
    echo "<h1 style='background-color:grey'>";
    print_r( $db[teachers][$i][name]);
    print_r($db[teachers][$i][lastname]);
    echo"</h1>";
};

for($i=0; $i< count($db["pm"]; $i++)){
    echo "<h1 style='background-color:green'>";
    print_r( $db[pm][$i][name]);
    print_r( $db[pm][$i][lastname]);
    echo"</h1>";
};


?>