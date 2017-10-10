<?php
/**
 * Created by PhpStorm.
 * User: stasys
 * Date: 17.10.10
 * Time: 15.14
 */

echo "Hello World!"; //Without var

// Commit #2
$test = "World";
$test2 = "!";
echo "Hello".$test.$test2; // With var

function hello($word1, $word2)
{
    echo "Hello".$word1.$word2;
}

hello($test, $test2);

?>