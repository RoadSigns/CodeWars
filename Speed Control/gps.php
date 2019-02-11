<?php
function gps($s, $x)
{
    for($i = 1; $i < count($x); $i++) {
        $speed[] = ((3600 * ($x[$i] - $x[($i-1)]) / $s));
    }
    rsort($speed);
    return floor(array_shift($speed));
}