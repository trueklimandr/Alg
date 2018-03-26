<?php
/**
 * Created by PhpStorm.
 * User: klimandr
 * Date: 26.03.18
 * Time: 9:58
 */

use sort\basicSort;

$sort = new basicSort();
$array = [55, '33', 1, 15, '23', 45];
echo var_dump($sort->insertionSort($array, 1));
