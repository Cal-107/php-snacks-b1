<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->
<?php

$posts = [

    '17/12/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Walter White',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Jesse Pinkman',
            'text' => 'Testo post 2'
        ],
    ],
    '13/12/2021' => [
        [
            'title' => 'Post 3',
            'author' => 'Tommy Shelby',
            'text' => 'Testo post 3'
        ]
    ],
    '10/12/2021' => [
        [
            'title' => 'Post 4',
            'author' => 'Jax Teller',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Geralt di Rivia',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Arthur Shelby',
            'text' => 'Testo post 6'
        ]
    ],
];

$posts2 = array_keys($posts);

for ($i = 0; $i < count($posts); $i++) { 
    echo var_dump($posts2) . '<br>';
    for ($j=0; $j < count($posts[$posts2[$i]]); $j++) { 
        echo $posts[$posts2[$i]] [$j] ['title'];
        echo '<br>';
        echo $posts[$posts2[$i]] [$j] ['author'];
        echo '<br>';
        echo $posts[$posts2[$i]] [$j] ['text'] . '<br> <br>';
    }
}
?>