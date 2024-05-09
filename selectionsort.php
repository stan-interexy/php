<?php 
function selectionSort(array $a): array
{
  for ($i = 0; $i < count($a) - 1; $i++) {
    $min_i = $i;
    for ($j = $i + 1; $j < count($a); $j++) {
      if ($a[$j] < $a[$min_i]) {
        $min_i = $j;
      }
    }
    if ($i != $min_i) {
      $temp = $a[$i];
      $a[$i] = $a[$min_i];
      $a[$min_i] = $temp;
    }
  }
  return $a;
}

$a = [5, 1, 4, 3];
$result = selectionSort($a);
print_r($a);
print_r($result);
