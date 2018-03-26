<?php
/**
 * Created by PhpStorm.
 * User: klimandr
 * Date: 26.03.18
 * Time: 9:21
 */

namespace alg\sort;

class basicSort
{
    /**
     * @param array $a (input array for sort)
     * @param int $order +1|-1 (ascending or descending)
     * @return array|string (sorted array or string with message in case wrong input)
     */
    public function insertionSort(array $a, int $order)
    {
        $aKeys = array_keys($a);
        if ($order == 1) {
            for ($j = 1; $j < count($a) - 1; $j++) {
                $key = $a[$aKeys[$j]];
                $i = $j - 1;
                while ($i > -1 && $a[$aKeys[$i]] > $key) {
                    $a[$aKeys[$i + 1]] = $a[$aKeys[$i]];
                    $i--;
                }
                $a[$aKeys[$i + 1]] = $key;
            }
            return $a;
        } elseif ($order == -1) {
            for ($j = 1; $j < count($a) - 1; $j++) {
                $key = $a[$aKeys[$j]];
                $i = $j - 1;
                while ($i > -1 && $a[$aKeys[$i]] < $key) {
                    $a[$aKeys[$i + 1]] = $a[$aKeys[$i]];
                    $i--;
                }
                $a[$aKeys[$i + 1]] = $key;
            }
            return $a;
        } else {
            return 'Received wrong order';
        }
    }
}
