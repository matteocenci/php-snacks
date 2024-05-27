<?php
$students = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'votes' => [8, 5, 7, 6]
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'votes' => [10, 2, 4]
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'votes' => [2, 8]
    ]
];


// Funzione calcolo media
function calcola_media($grades) {
    $total = array_sum($grades);
    $count = count($grades);

    return $count > 0 ? $total / $count : 0;
}

//Stampo i nomi e la media dei voti
foreach($students as $student) {
    $name = $student['name'];
    $lastname = $student['lastname'];
    $media = calcola_media($student['votes']);

    echo "Nome: $name, Cognome: $lastname, Media voti: $media <br>" ;
}


?>