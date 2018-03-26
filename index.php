<?php
/**
 * Created by PhpStorm.
 * User: klimandr
 * Date: 26.03.18
 * Time: 9:58
 */

require __DIR__ . '/vendor/autoload.php';

use alg\sort\basicSort;

$sort = new basicSort();

$array = range(0, 10000);
shuffle($array);
$array1 = $array;
$array2 = $array;

$time11 = microtime(true);
$sort->insertionSort($array1, +1);
$time12 = microtime(true);

$time21 = microtime(true);
$sort->selectionSort($array2);
$time22 = microtime(true);

$t_ins_sort1 = round($time12-$time11, 3);
$t_ins_sort2 = round($time12-$time11, 3);

echo "Insertion sort spent $t_ins_sort1 sec\n";
echo "Selection sort spent $t_ins_sort1 sec";
