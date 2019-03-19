<?php

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, array(
    'cache' => './tmp/cache',
));

// echo '<script>alert("gotcha");</script>';

$twig_array = [
    'name' => 'Nate',
    'todos' => [
        [
            'id' => '1',
            'title' => 'One thing',
            'completed' => true,
        ],
        [
            'id' => '2',
            'title' => 'Another thing',
            'completed' => false,
        ],
        [
            'id' => '3',
            'title' => '<script>alert("Last thing");</script>',
            'completed' => true,
        ]
    ]
];

echo $twig->render('index.twig', $twig_array);
