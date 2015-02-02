<?php

$name = 'kenny';
$dead = 2;

/*
BOOLEAN == INTEGER
=> THEN
BOOLEAN == INTEGER transformé en BOOLEAN
*/
if (true == $dead) {
    echo 'u killed '.$name.'. U bastard!';
} else {
    echo $name.' is alive';
}

/*

= Assignation

== Test de valeur

=== Test sur le type PUIS sur la valeur

*/