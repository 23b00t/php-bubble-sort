<?php

function getInput($input)
{
    // return [5, 7, 3, 1, -7, 23, 5, -1000, 'wax', 0.5, [23, 1], '8', 'abc', 9, '23', 'www', [3, 2]];
    // split user input string to array, seperate at every not a-zA-Z0-9 and '-'
    return preg_split("/[^\w-]/", $input);
}
