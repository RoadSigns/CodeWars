<?php
function evaporator(int $content, int $evap_per_day, int $threshold): int
{
    $days = 0;
    $thresholdAmmount = $threshold / 100 * $content;
    
    while ($content >= $thresholdAmmount){
      $content -= ($evap_per_day / 100 * $content);
      $days++;
    }
    return $days;
}