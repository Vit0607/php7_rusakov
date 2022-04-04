<?php
$persons = [
    [
        'name' => 'Victor',
        'is_married' => true
    ],
    [
        'name' => 'Karl',
        'is_married' => false
    ],
    [
        'name' => 'Margo',
        'is_married' => false
    ]
];

foreach ($persons as $person) {
    if ($person['is_married']) {
        echo 'Молодец, ' . $person['name'];
    }
}