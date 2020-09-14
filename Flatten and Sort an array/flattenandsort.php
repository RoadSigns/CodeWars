<?php

function flatten_and_sort(array $a): array
{
    $flatten = array_merge([], ...$a);
    sort($flatten);
    return $flatten;
}