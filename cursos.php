<?php
//BACK-END

$cursos = [
    [
        'id' => 1,
        'nome' => 'TSI',
        'semestres' => 5,
        'coordenador' => 'Joice'
    ],
    [
        'id' => 2,
        'nome' => 'BSI',
        'semestres' => 8,
        'coordenador' => 'Aujor'
    ]
];


if (!isset($_GET['id'])){
    echo(json_encode($cursos));
}else{
    echo(json_encode($cursos[$_GET['id']-1]));
}

