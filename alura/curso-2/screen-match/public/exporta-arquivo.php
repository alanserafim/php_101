<?php

$filme = [
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['nota'],
    'genero' => $_POST['genero'],
];

//var_dump($filme);

file_put_contents('filme.json', json_encode($filme));

header('Location: /sucesso.php?filme='.$filme['nome']);