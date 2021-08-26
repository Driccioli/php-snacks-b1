<?php

/*
    Creare un array contenente qualche alunno di un’ipotetica classe.
    Ogni alunno avrà i seguenti dati:
    nome
    cognome
    un array contenente i suoi voti scolastici
    Stampare nome, cognome e la media dei voti di ogni alunno.
*/

$students = [
    [
        'nome'=> 'Antonio',
        'cognome' =>'Fantoni',
        'voti' =>[10,8,9,5,8,10]
    ],
    [
        'nome'=> 'Gastani',
        'cognome' =>'Frinzi',
        'voti' =>[10,8,9,5,8,7]
    ],
    [
        'nome'=> 'Giovanni',
        'cognome' =>'Muciaccia',
        'voti' =>[10,3,9,5,8,10]
    ],
    [
        'nome'=> 'Davide',
        'cognome' =>'Riccioli',
        'voti' =>[10,10,9,5,10,10]
    ],
    [
        'nome'=> 'Eleonardo',
        'cognome' =>'Darvasi',
        'voti' =>[2,8,9,5,8,2]
    ]
    ];

var_dump($students);
?>