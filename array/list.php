<?php

//<<----------->> numeric array listing methods <<----------->>//

$tst = [12, 'bob', 19, 'NA'];

list(
    $id,
    $name,
    $age,
    $address,
) = $tst;

// echo '<pre>';
// var_dump(
//     $id,
//     $name,
//     $age,
//     $address,
//     // $tst
// );
// echo '</pre>';
// exit;


//<<-----X----->> numeric array listing methods <<-----X----->>//



//<<----------->> associative array listing methods <<----------->>//

$tst = [
    'id' => 12,
    'name' =>  'bob',
    'age' =>  19,
    'address' =>  'NA'
];

[
    'id' => $id,
    'name' =>  $name,
    'age' =>  $age,
    'address' =>  $address,
] = $tst;

echo '<pre>';
var_dump(
    $id,
    $name,
    $age,
    $address,
    // $tst
);
echo '</pre>';
exit;
//<<-----X----->> associative array listing methods <<-----X----->>//


$users = [
    [
        'id' => 1,
        'first_name' => 'sam',
        'books' => [
            'book_id' => 32532,
            'book_name' => [
                'Advanced PHP',
                'Programming Ideas'
            ]
        ]
    ],
    [
        'id' => 2,
        'first_name' => 'bob',
        'books' => [
            'book_id' => 34235,
            'book_name' => [
                'Advanced CSS',
                'Tec Ideas'
            ]
        ]
    ],
];


foreach ($users as $user) {
    list(
        'books' => list(
            'book_name' => $books[]
        )
    ) = $user;
}

echo '<pre>';
var_dump($books);
echo '</pre>';
exit;
