<?php

//<<----------->> single dimension <<----------->>//


// old version
$names = array('bob', 'sam');


// new version
$names = ['bob', 'sam'];


// numeric array
$user = array(2, 'bob');


// associative array
$user = array(
    'id' => 2,
    'first_name' => 'bob'
);


//<<-----X----->> single dimension <<-----X----->>//


//<<----------->> multi dimension <<----------->>//

$users = array(
    array(
        'id' => 1,
        'first_name' => 'sam',
        array(
            'book_id' => 32532,
            'book_name' => array(
                'Advanced PHP',
                'Programming Ideas'
            )
        )
    ),
    array(
        'id' => 2,
        'first_name' => 'bob'
    ),
);


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

//<<-----X----->> multi dimension <<-----X----->>//


foreach ($users as $user) {
    foreach ($user as $key => $data) {
        if ($key === 'books') {
            foreach ($data['book_name'] as $key => $value) {
                $books[] = $value;
            }
        }
    }
}

echo '<pre>';
var_dump($books);
echo '</pre>';
exit;
