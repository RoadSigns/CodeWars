<?php

function uniqueInOrder($iterable)
{
    $result = [];

    if (empty($iterable)) {
        return [];
    }

    if (!is_array($iterable)) {
        $iterable = str_split($iterable);
    }

    foreach ($iterable as $letter) {
        if (end($result) === $letter) {
            continue;
        }
        $result[] = $letter;
    }

    return $result;
}