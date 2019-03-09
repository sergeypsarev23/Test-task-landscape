<?php

function solution(array $inputArr)
{
   $count = count($inputArr);
   $maxHDuringShifting = 0;
   if ($count < 2) {
     return 0;
   }
   $maxPrevH = $inputArr[0];
   $maxDepth = 0;
  
   foreach ($inputArr as $curr) {
        $maxHBetweenLR = max($maxPrevH - $curr, 0);
        $maxHDuringShifting = max($maxPrevH - $curr, $maxHDuringShifting);
        $maxPrevH = $curr > $maxPrevH ? $curr : $maxPrevH;
        $realMax = $maxHDuringShifting - $maxHBetweenLR;
        $maxDepth = $realMax > $maxDepth ? $realMax : $maxDepth;        
   }
   return $maxDepth;
}

$inputs = [
  [1],
  [3,0,3],
  [3,2,1],  
  [1,3,2,1,2,1,5,3,3,4,2],
  [1,13,2,1,2,1,5,3,3,4,2],
  [1,1,2,1,2,1,5,3,3,4,2],
  [1,11,2,3,2,12,15,3,3,4,2],
  [3,6],
  [0,1,2,5,10],  
  [0,1,2,5,10,3,2,1,0],  
  [0,1,2,5,10,8,10,3,2,1,0],  
  [0,1,2,5,10,10,10,3,2,1,0],  
  [0,2,0,1,3,0,0,4,3,5,4,4,5,0,3],
  [0,2,0,1,3,0,0,4,3,5,4,4,5,100],
  [0,2,0,1,3,0,0,4,3,5,4,4,5,0,0,100],
  [6,1,4,1,3,5,3,2,1,2,1,1,1,5,1,1],
];

foreach ($inputs as $input) {
  echo solution($input) . ', ';
}
