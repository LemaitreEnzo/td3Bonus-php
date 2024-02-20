<?php
// ex1
$firstNames = array('Steve', 'Jeff', 'Marck', 'Sundar');

// ex2
$firstNames[2] = 'Mark';

// ex3
array_push($firstNames, 'Bill');

// ex4
array_unshift($firstNames, 'Julie');

// ex5
sort($firstNames);

// ex7
count($firstNames);

// ex9
$user1 = [
    'firstName' => 'Steve',
    'lastName' => 'Jobs',
    'email' => 'steve.jobs@apple.com'
];
$user2 = [
    'firstName' => 'Jeff',
    'lastName' => 'Bezos',
    'email' => 'Jeff.bezos@amazon.com'
];
$user3 = [
    'firstName' => 'Bill',
    'lastName' => 'Gates',
    'email' => 'Bill.Gates@microsoft.com'
];
$user4 = [
    'firstName' => 'Sundar',
    'lastName' => 'Pichai',
    'email' => 'Sundar.Pichai@google.com'
];
$user5 = [
    'firstName' => 'Mark',
    'lastName' => 'Zuckerberg',
    'email' => 'Mark.Zuckerberg@meta.com'
];
$user6 = [
    'firstName' => 'Julie',
    'lastName' => 'Chapon',
    'email' => 'Julie.Chapon@exemple.com'
];

// ex10
$users = [$user1, $user2, $user3, $user4, $user5, $user6];


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Le premier prénom du tableau firstnames est : <?= $firstNames[0] ?></p>
    <?php
    echo '<ul>';
    foreach ($firstNames as $firstName) {
        echo "<li>$firstName</li>";
    }
    echo '</ul>' ?>
    <?php
    echo '<ul>';
    foreach ($users as $user) {
        echo "<li>{$user['firstName']} {$user['lastName']} : {$user['email']}</li>";
    }
    echo '</ul>'  
    ?>


</body>

</html>