<?php
function cooking_time(int $eggs): int 
{
  return ($eggs != 0) ? 5 * (ceil(8 / $eggs)) : 0;
}