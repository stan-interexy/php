<?php
function bubbleSort(array $a): array
{
  for ($i = count($a) - 1; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
      if ($a[$j] > $a[$j + 1]) { 
        $temp = $a[$j];
        $a[$j] = $a[$j+1];
        $a[$j+1] = $temp;
      }
    }
  }
  return $a;
}

$myArray = [3, 1, 5, 2, 4];
$result = bubbleSort($myArray);
print_r($result);
