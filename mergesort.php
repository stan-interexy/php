<?php
function mergeSort(&$array)
{
    if (count($array) <= 1) return;
    $mid = (int) (count($array) / 2);
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

    mergeSort($left);
    mergeSort($right);

    $i = 0;
    $j = 0;
    $k = 0;

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            $array[$k] = $left[$i];
            $i += 1;
        } else {
            $array[$k] = $right[$j];
            $j += 1;
        }
        $k += 1;
    }

    while ($i < count($left)) {
        $array[$k] = $left[$i];
        $i += 1;
        $k += 1;
    }
    while ($j < count($right)) {
        $array[$k] = $right[$j];
        $j += 1;
        $k += 1;
    }
}

$x = array(8, 1, 5, 7, 9, 3, 2, 4, 6);
echo json_encode($x) . "\n";
mergeSort($x);
echo json_encode($x);
?>