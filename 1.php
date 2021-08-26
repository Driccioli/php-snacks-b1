<?php

/*
Creiamo un array contentnte le partite di basket di un'ipotetica tappa del calendario.
Ogi array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60
*/

$partite = [

    [
        "casa" => "Olimpia Milano",
        "ospite" => "Cantù",
        "casaPunti" => 55,
        "ospitePunti" => 60,
    ],
    [
        "casa" => "Virtus",
        "ospite" => "Bologna",
        "casaPunti" => 40,
        "ospitePunti" => 30,
    ],
    [
        "casa" => "F.C Matera",
        "ospite" => "Inter",
        "casaPunti" => 55,
        "ospitePunti" => 1,
    ],
];

for($i=0; $i< count($partite); $i++){

    $string = "{$partite[$i]['casa']} - $partite[$i]['ospite']} | {$partite[$i]['casaPunti']}-$partite[$i]['ospitePunti']}";
    echo $string;
};


?>