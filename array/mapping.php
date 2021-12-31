<?php

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


$ids = array_map(fn (array $user) => $user['id'], $users);


echo '<pre>';
var_dump($ids);
echo '</pre>';
exit;
