<?php

$config = [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'toor', // WAMP => null | MAMP 'root'
    'dbname'   => 'p2019_grd_php1', // php1
    'port'     => null, // WAMP => null | MAMP => 8889
];

// mysql_connect(); = 0 sur la note

$link = mysqli_connect(
    $config['hostname'],
    $config['username'],
    $config['password'],
    $config['dbname'],
    $config['port']
) or die('Error');

// SELECT | INSERT | UPDATE | DELETE

// FROM | WHERE

$sql   = 'SELECT * FROM pokemon';
$query = mysqli_query($link, $sql);

if (false !== $query) {
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
} else {
    //var_dump(mysqli_error($link));
}

foreach ($result as $pokemon) {
    echo '<h1>'.$pokemon['name'].'</h1>';
    echo '<small>'.$pokemon['hp'].'HP</small>';
}
