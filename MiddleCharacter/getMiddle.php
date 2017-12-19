<?php
function getMiddle(string $text): string
{
  $letters = str_split($text);
  
  return (count($letters) % 2)
    ? $letters[(count($letters)/2)]
    : $letters[ceil(count($letters)/2 - 1)] . $letters[floor(count($letters)/2)];
}