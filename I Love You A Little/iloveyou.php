<?php

function how_much_i_love_you(int $nb_petals): string
{
    $nonAggersiveChant = [
        'I love you',
        'a little',
        'a lot',
        'passionately',
        'madly',
        'not at all'
    ];
    $number = (($nb_petals % 6));
    return $number ? $nonAggersiveChant[$number - 1] : $nonAggersiveChant[5];

}