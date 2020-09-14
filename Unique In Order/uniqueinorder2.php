<?php

function uniqueInOrder($iterable)
{
    $array = is_string($iterable) ? str_split($iterable) : $iterable;
    return array_reduce($array, static function($carry, $item) {
        if ($item !== end($carry)) {
            $carry[] = $item;
        }
        return $carry;
    }, []);
}