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
            for ($j = 1; $j < count($a); $j++) {
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
            for ($j = 1; $j < count($a); $j++) {
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

    /**
     * @param array $a (input array for sort)
     * @return array (sorted array)
     */
    public function selectionSort(array $a)
    {
        $aKeys = array_keys($a);
        for ($j = 0; $j < count($a) - 1; $j++) {
            $var = $a[$aKeys[$j]];
            $key = $j;
            for ($i = $j; $i < count($a) - 1; $i++) {
                if ($a[$aKeys[$i]] > $a[$aKeys[$i + 1]] && $a[$aKeys[$i + 1]] < $var) {
                    $var = $a[$aKeys[$i + 1]];
                    $key = $i + 1;
                }
            }
            $a[$aKeys[$key]] = $a[$aKeys[$j]];
            $a[$aKeys[$j]] = $var;
        }
        return $a;
    }

    /**
     * @param array $a - sorting array
     * @param int $p - first element for sort
     * @param int $r - last element for sort
     */
    public function mergeSort(array &$a, int $p, int $r)
    {
        if ($p < $r) {
            $q = ($p + $r)/2 - (($p + $r)%2)/2;
            $this->mergeSort($a, $p, $q);
            $this->mergeSort($a, $q + 1, $r);
            $this->merge($a, $p, $q, $r);
        }
    }

    /**
     * It is used in mergeSort.
     * Merge array from two half-parts: first part - a[p] .. a[q], second part - a[q+1] .. a[r].
     *
     * @param array $a
     * @param int $p
     * @param int $q
     * @param int $r
     */
    public function merge(array &$a, int $p, int $q, int $r)
    {
        $n1 = $q - $p + 1;
        $n2 = $r - $q;
        for ($i = 0; $i < $n1; $i++) {
            $L[$i] = $a[$p + $i];
        }
        for ($j = 0; $j < $n2; $j++) {
            $R[$j] = $a[$q + $j + 1];
        }
        $L[$n1] = PHP_INT_MAX;
        $R[$n2] = PHP_INT_MAX;
        $i = 0;
        $j = 0;
        for ($k = $p; $k < $r + 1; $k++) {
            if ($L[$i] <= $R[$j]) {
                $a[$k] = $L[$i];
                $i++;
            } else {
                $a[$k] = $R[$j];
                $j++;
            }
        }
    }

    /**
     * @param $x
     * @return float|int
     */
    public function factorial($x)
    {
        if ($x > 0) {
            return $x * $this->factorial($x - 1);
        } else {
            return 1;
        }
    }
}
