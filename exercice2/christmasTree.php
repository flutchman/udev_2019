<?php

/*************************************/
/* Set here its size;                */
/*************************************/

$line = readline("How much this tree has to be ? ");

/*************************************/
/* Display here the Tree !           */
/*************************************/

// Use 'for' https://www.php.net/manual/fr/control-structures.for.php
// Use 'str_repeat' https://www.php.net/manual/fr/function.str-repeat.php
// First use ' ' and THEN "*"

for ($i = 1; $i < $line; $i++) {
    echo str_repeat(" ", $line - $i);
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo str_repeat("*", $i - 1);
    echo "\n";
}

// Don't forget the trunk !

$trunk = $line / 3;
for ($i = 0; $i < 3; $i++) {
    echo str_repeat(" ", ($line - $trunk));
    echo str_repeat("*", $line - $trunk);
    echo "\n";
}

echo "\n";
