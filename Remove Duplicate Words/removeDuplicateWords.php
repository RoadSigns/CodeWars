<?php
$string = 'alpha beta beta gamma gamma gamma delta alpha beta beta gamma gamma gamma delta';
var_dump(removeDuplicateWords($string));

function removeDuplicateWords($string)
{
    return implode(' ' , array_unique(explode(' ', $string)));
}