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

$array = range(0, 5000);
shuffle($array);

$time1 = microtime(true);
print_r($sort->insertionSort($array, +1));
$time2 = microtime(true);

$t_ins_sort = round($time2-$time1, 2);

echo "Spent $t_ins_sort sec";
