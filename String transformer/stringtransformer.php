<?php

function string_transformer(string $str): string
{
    return implode(' ', array_reverse(explode(' ',strtolower($str) ^ strtoupper($str) ^ $str)));
}