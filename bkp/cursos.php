<?php

$cursos = [
    [
        'id' => 1,
        'nome' => 'TSI EaD',
        'semestres' => 5,
        'coordenador' => 'Joice Seleme Mota'
    ],
    [
        'id' => 2,
        'nome' => 'BSI',
        'semestres' => 8,
        'coordenador' => 'Aujor Andrade'

    ]
];

function getCurso($id){
    global $cursos;
    return $cursos[$id-1];
}

$query = parse_str($_SERVER['QUERY_STRING'], $parameters);

if (isset($parameters['id'])){
    $curso = getCurso($parameters['id']);
    echo(json_encode($curso));
}else{
    echo(json_encode($cursos));
}