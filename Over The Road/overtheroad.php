<?php

//function overTheRoad($address, $street)
//{
//    $houses = range(1, ($street * 2));
//    $half = (count($houses) / 2);
//    $split = array_chunk($houses, $half);
//    $split[1] = array_reverse($split[1]);
//
//    return (in_array($address, $split[0], true))
//        ? $split[1][(array_search($address, $split[0], true))]
//        : $split[0][(array_search($address, $split[1], true))];
//}

//function overTheRoad($address, $street)
//{
//    $houses = range(1, ($street * 2));
//    $key = array_search($address, $houses, true);
//    $flippedHouses = array_reverse($houses);
//    return $flippedHouses[$key];
//}

function overTheRoad($address, $street)
{
    return 2 * $street - $address + 1;
}